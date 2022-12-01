<!DOCTYPE html>
  <html lang="fr">
    <head>
      <?php 
      $title = "Php projet Noham et Justin";
      require "components/head.php"; 
      ?>
    </head>

    <body>
      <?php require "components/navbar.php"; 
      require "cfg/config.php";
      $sql = "SELECT * FROM home";
      $pre = $pdo->prepare($sql); 
      $pre->execute();
      $home = $pre->fetchall();
      $h1 = $home[0][0];
      $h2 = $home[0][1];
      $p1 = $home[0][2];
      $p2 = $home[0][3];
      $cardp1 = $home[0][4];
      $cardp2 = $home[0][5];
      $card1title = $home[0][6];
      $card2title = $home[0][7];
      ?>

      <h1 class="title center"><?php echo $h1?></h1>
      <?php
      $sql = "SELECT * FROM projects";
      $pre = $pdo->prepare($sql); 
      $pre->execute();
      $projectList = $pre->fetchall();
      ?>
      <!--Slider images et texte-->
      <div class="slider">
        <ul class="slides">
          <?php foreach($projectList as $project){?>
            <li>
              <img src="<?php echo $project[2]?>" alt="<?php echo $project[1]?>"> 
              <div class="caption center-align">
                <h2 class="red-text text-darken-4 title flow-text"><?php echo $project[1]?></h2>
                <h5 class="red-text text-darken-4"><?php echo $project[5]?></h5>
              </div>
            </li>
          <?php
          }?>
        </ul>
      </div>
          
      <!--Collapsible-->
      <div class="row container">
        <div class="col l6 m6 s12">
          <ul class="collapsible popout">
            <?php foreach($projectList as $project){?>
              <li class="active">
                <div class="collapsible-header" id="listHelltaker"><i class="material-icons">arrow_drop_down</i><?php echo $project[1]?></div>
                <div class="collapsible-body white">
                  <span><?php echo $project[5]?></span>
                  <a class="btn-floating right cyan darken-4 pulse" href="projects.php?id=<?php echo $project[0]?>"><i class="fa-solid fa-magnifying-glass"></i></a>
                </div>
              </li>
            <?php
            }?>
          </ul>
        </div>
      </div>

      <!--Paralaxe-->
      <div class="parallax-container tea">
        <div class="parallax"><img src="img/tea.jpg" alt="minecraft"></div>
      </div>
      <audio id="slurp" src="audio/slurp.mp3" preload="auto"></audio>

      <!--About Us-->
      <div class="container">
        <h2 class="title center"><?php echo $h2?></h2>
        <p><?php echo $p2 ?></p>
        <div class="row">
          <div class="aboutUs1 card cyan darken-4 white-text horizontal col m5 s12">
            <div class="card-image">
              <img src="img/coucoul38.jpg" alt="coucoul skin minecraft">
            </div>
            <div class="card-stacked">
              <div class="card-content">
                <h4 class="title"><?php echo $card1title?></h4>
                <p class="flow-text"><?php echo $cardp1?></p>
              </div>
            </div>
          </div>

          <div class="aboutUs1 card cyan darken-4 white-text horizontal col m5 s12 right">
            <div class="card-image">
              <img src="img/killingaming.jpg" alt="killingaming logo">
            </div>
            <div class="card-stacked">
              <div class="card-content">
                <h4 class="title"><?php echo $card2title?></h4>
                <p class="flow-text"><?php echo $cardp2?>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <?php require "components/footer.php"?>

      <!--JavaScript at end of body for optimized loading-->
      <script src="js/jquery.min.js"></script>
      <script src="js/materialize.min.js"></script>
      <script src="js/script.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </body>
  </html>