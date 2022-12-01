<!DOCTYPE html>
  <html lang="fr">
    <head>
      <?php 
      $title = "Fansite Helltaker";
      require "components/head.php";
      ?>
    </head>
   
    <body>
        <?php require "components/navbar.php"; 
        require "cfg/config.php";?>
        <h1 class="center title"> Fansite : Présentation du jeu Helltaker</h1>
       
        <!--Paralaxe-->
      <div class="parallax-container">
        <div class="parallax"><img src="img/helltaker.jpg" alt="helltaker"></div>
      </div>
    

      <!--Présentation-->
        <div class="row container">
          <div class="col m4 s12">
            <div class="card">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="img/preview_helltaker.jpg" alt="Our website">
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Design du site<i class="material-icons right hide-on-med-and-down">more_vert</i></span>
              </div>
              <div class="card-reveal flow-text">
                <span class="card-title grey-text text-darken-4">Concept<i class="material-icons right hide-on-med-and-down">close</i></span>
                <p>Nous avons basé le design de notre site sur celui du jeu, en utilisant la même palette de couleur, ainsi que certains backgrounds.</p>
                <a href="https://presentation-helltaker.coucoul38.repl.co" target="_blank">Consulter le site</a>
              </div>
            </div>
          </div>
          <div class="col m8 s12">
            <h2>Présentation du projet</h2>
            <p class="flow-text">Nous avons créé ce fansite dans le cadre de notre premier projet dans l'école Gaming Campus.
              <br>L'objectif était de créer un site en une page avec un header, un formulaire de contact et en utilisant le flex.
            </p>
          </div>
        </div>
        <!--Features-->
        <h2 class="center">Features du site</h2>
        <div class="row container">
          <div class="col m6 s12">
            <div class="card">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="img/abomination_onglets.JPG" alt="Heltaker Header" >
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Navbar<i class="material-icons right hide-on-med-and-down">more_vert</i></span>
              </div>
              <div class="card-reveal flow-text">
                <span class="card-title grey-text text-darken-4">Navbar<i class="material-icons right hide-on-med-and-down">close</i></span>
                <p>Nous avons créé une navbar fixe, avec des bouttons menant aux différentes parties de la page pour naviguer facilement.</p>
              </div>
            </div>
          </div>

          <div class="col m6 s12">
            <div class="card">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="img/cursor.gif" alt="Curseur">
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Curseurs custom<i class="material-icons right hide-on-med-and-down">more_vert</i></span>
              </div>
              <div class="card-reveal flow-text">
                <span class="card-title grey-text text-darken-4">Curseurs custom<i class="material-icons right hide-on-med-and-down">close</i></span>
                <p>Nous avons customisé le curseur en CSS, pour qu'il change suivant la zone de la page, en utilisant les différents personnages du jeu comme images.
                  <br><a href="https://presentation-helltaker.coucoul38.repl.co" target="_blank">Constatez par vous même</a>
                </p>
              </div>
            </div>
          </div>
          <div class="col m6 s12">
            <div class="card">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="img/helltaker_embed.JPG" alt="embed">
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Embeds<i class="material-icons right hide-on-med-and-down">more_vert</i></span>
              </div>
              <div class="card-reveal flow-text">
                <span class="card-title grey-text text-darken-4">Embeds<i class="material-icons right hide-on-med-and-down">close</i></span>
                <p>Le cahier des charges du projet demandais d'ajouter au moins un embed au site.
                  <br>Nous en avons mis trois : une vidéo de gameplay, l'OST du jeu et le lien Steam.
                </p>
              </div>
            </div>
          </div>
          <div class="col m6 s12">
            <div class="card">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="img/helltaker_footer.jpg" alt="Helltaker footer">
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Footer<i class="material-icons right hide-on-med-and-down">more_vert</i></span>
              </div>
              <div class="card-reveal flow-text">
                <span class="card-title grey-text text-darken-4">Footer<i class="material-icons right hide-on-med-and-down">close</i></span>
                <p>Nous avons inclus un formulaire de contact dans le footer du site, avec du texte placeholder pour indiquer quoi taper dans les différents champs et un boutton "envoyer".
                  <br>Cependant, ce n'est qu'un design non fonctionnel.
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="container">
          <h3 class="center title">Présentation du jeu</h3>
          <div class="card">
            <ul class="collapsible">
              <li class="active">
                <div class="collapsible-header flow-text"><i class="material-icons">favorite</i>"Scénario"</div>
                <div class="collapsible-body flow-text">
                 <p>Le joueur incarne "The Helltaker" et doit résoudre des puzzles pour se constituer un harem de filles démons.</p>
                  <img class="sus" src="img/sussy_helltaker_fanart_smol.jpg" alt="kinda sus ngl">
                 <audio id="boom" src="audio/vine_boom.mp3" preload="auto"></audio>
               </div>
             </li>
             <li>
               <div class="collapsible-header flow-text"><i class="fa-solid fa-gamepad"></i>Gameplay</div>
                <div class="collapsible-body flow-text">Le jeu se joue de manière similaire au jeu classique Sokoban, mais avec des mécaniques additionelles, comme un nombre de déplacements limités ou des obstacles destructibles (squelettes).
                  <br>Le but est de résoudre les puzzles pour arriver devants les filles démons, puis de répondre correctement à leur question, à la manière d'un jeu de drague.
                </div>
              </li>
            </ul>
          </div>
          <h3 class="center title">Notre ressenti</h3>
          <p class="flow-text">C'était un projet très intéressant, et nous sommes très satisfait du design de notre site, mais comme nous l'a fait remarquer notre intervenant, nous n'avons pas assez exploité ce qu'il nous a appris en cours, ce qui est dommage.</p>
        </div>

      <?php require "components/footer.php";?>
  </body>
</html>
