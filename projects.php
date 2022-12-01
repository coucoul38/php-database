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
      require "cfg/config.php";?>

      <h1 class="title center">Accueil</h1>

      <!--Slider images et texte-->
      <div class="slider">
        <ul class="slides">
          <li>
            <img src="img/helltaker.jpg" alt="helltaker"> 
            <div class="caption center-align">
              <h2 class="red-text text-darken-4 title flow-text">Présentation du jeu Helltaker</h2>
              <h5 class="red-text text-darken-4">Nous avons créé un site présentant le jeu Helltaker</h5>
            </div>
          </li>
          <li>
            <img src="img/preview_minecraft3.jpg" alt="preview minecraft"> 
            <div class="caption center-align">
              <h2 class="green-text text-darken-4 title flow-text">Serveur Minecraft</h2>
              <h5 class="green-text text-darken-4">Noham est en train de créer un serveur de mini-jeux Minecraft</h5>
            </div>
          </li>
          <li>
            <img src="img/murder_drones.jpg" alt="murder drones">
            <div class="caption center-align">
              <h2 class="blue-text text-darken-4 title flow-text">Murder Drones</h2>
              <h5 class="blue-text text-darken-4">Présentation d'un épisode pilote qui nous tient à coeur</h5>
            </div>
          </li>
        </ul>
      </div>
      
      <?php require "components/footer.php" ?>

      <!--JavaScript at end of body for optimized loading-->
      <script src="js/jquery.min.js"></script>
      <script src="js/materialize.min.js"></script>
      <script src="js/script.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </body>
  </html>
