<!DOCTYPE html>
  <html lang="fr">
    <head>
      <?php 
      $title = "kid amogus but backwards";
      require "components/head.php"; 
      ?>
    </head>

    <body>
      <?php require "components/navbar.php"; ?>

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
          

      <!--Collapsible-->
      <div class="row container">
        <div class="col l6 m6 s12">
          <ul class="collapsible popout">
            <li class="active">
              <div class="collapsible-header" id="listHelltaker"><i class="material-icons">arrow_drop_down</i>Site Helltaker</div>
              <div class="collapsible-body white">
                <span>Une présentation de notre premier projet dans l'école supérieure G.Tech : créer un site présentant un jeu vidéo</span>
                <a class="btn-floating right cyan darken-4 pulse" href="helltaker.html"><i class="fa-solid fa-magnifying-glass"></i></a>
              </div>
            </li>
            <li>
              <div class="collapsible-header" id="listMinecraft"><i class="material-icons">arrow_drop_down</i>Projet de serveur Minecraft</div>
              <div class="collapsible-body white">
                <span>Salut, c'est Noham. Je suis en train de créer un serveur de mini-jeux modés sur minecraft, en utilisant des commandes dérivées du Java.</span>
                <a class="btn-floating right cyan darken-4 pulse" href="minecraft.html"><i class="fa-solid fa-magnifying-glass"></i></a>
              </div>
            </li>
            <li>
              <div class="collapsible-header" id="listMurderDrones"><i class="material-icons">arrow_drop_down</i>Murder Drones</div>
              <div class="collapsible-body white">
                <span>Nous allons parler de l'épisode pilote d'une série en phase de production qui nous tiens à coeur</span>
                <a class="btn-floating right cyan darken-4 pulse" href="murder_drones.html"><i class="fa-solid fa-magnifying-glass"></i></a>
              </div>
            </li>
          </ul>
        </div>
        <div class="col l6 m6 s12">
          <img id="listImg" class="materialboxed width100" src="img/preview_helltaker.jpg" alt="preview">
        </div>
      </div>

      <!--Paralaxe-->
      <div class="parallax-container tea">
        <div class="parallax"><img src="img/tea.jpg" alt="minecraft"></div>
      </div>
      <audio id="slurp" src="audio/slurp.mp3" preload="auto"></audio>

      <!--About Us-->
      <div class="container">
        <h2 class="title center">About us</h2>
        <div class="row">
          <div class="aboutUs1 card cyan darken-4 white-text horizontal col m5 s12">
            <div class="card-image">
              <img src="img/coucoul38.jpg" alt="coucoul skin minecraft">
            </div>
            <div class="card-stacked">
              <div class="card-content">
                <h4 class="title">Noham Coulon "Coucoul38"</h4>
                <p class="flow-text">Salut, j'aime coder et jouer aux jeux vidéos.
                  <br>Ces derniers temps, j'ai comméncé à coder des mini-jeux dans minecraft.
                </p>
              </div>
            </div>
          </div>

          <div class="aboutUs1 card cyan darken-4 white-text horizontal col m5 s12 right">
            <div class="card-image">
              <img src="img/killingaming.jpg" alt="killingaming logo">
            </div>
            <div class="card-stacked">
              <div class="card-content">
                <h4 class="title">Justin Killingback "Killingaming"</h4>
                <p class="flow-text">Bienvenue terrien, j'aime jouer aux jeux particulièrement de Nintendo en live, et en ce moment des F2P.
                  <br>Etudiant à G.Tech, je fait parti de ProjeTea.
                </p>
              </div>
            </div>
          </div>
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
