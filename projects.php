<!DOCTYPE html>
  <html lang="fr">
    <head>
      <?php 
      require "cfg/config.php";
      $id = $_GET['id'];
      $sql = "SELECT * FROM `projects` WHERE id=$id";
      $pre = $pdo->prepare($sql); 
      $pre->execute();
      $project = $pre->fetchall();
      $name = $project[0][1];
      $title = "Projet ".$id.": ".$name;
      require "components/head.php";
      ?>
    </head>

    <body>
      <?php require "components/navbar.php"; 
      $img_parallax = "../".$project[0][2];
      $h2 = $project[0][3];
      $p1 = $project[0][4];
      ?>

      <h1 class="title center"><?php echo $name; ?></h1>

      <!--Paralaxe-->
      <div class="parallax-container">
        <div class="parallax"><img src="<?php echo $img_parallax; ?>" alt="img parallax"></div>
      </div>

      <div class="row container flow-text">
        <div class="col m8 s12">
          <h2><?php echo $h2; ?></h2>
          <p><?php echo $p1; ?></p>
        </div>
      </div>
      <?php require "components/footer.php" ?>

      <!--JavaScript at end of body for optimized loading-->
      <script src="js/jquery.min.js"></script>
      <script src="js/materialize.min.js"></script>
      <script src="js/script.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </body>
  </html>
