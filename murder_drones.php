<!DOCTYPE html>
  <html lang="fr">
    <head>
      <?php 
      $title = "Murder Drones";
      require "components/head.php";
      ?>
    </head>
   
    <body>
      <?php require "components/navbar.php" ?>

        <h1 class="center title">Murder Drones</h1>
       
        <!--Paralaxe-->
      <div class="parallax-container">
        <div class="parallax"><img src="img/murder_drones.jpg" alt="minecraft"></div>
      </div>
    

      <div class="row container flow-text">
        <div class="col m4 s12">
          <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="img/uzi_powerpoint.jpg" alt="uzi powerpoint">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Présentation de l'épisode pilote<i class="material-icons right">more_vert</i></span>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Infromations<i class="material-icons right">close</i></span>
              <p>Murder Drones est un projet de Glitch Production en collaboration avec Liam Vickers, storyborard artist. C'est un court métrage 3D d'environ 30 minutes, en anglais.
              </p>
            </div>
          </div>
        </div>
        <div class="col m8 s12">
          <h2>Le scénario (en bref)</h2>
          <p>Dans un futur dystopique où une experience ratée à éradiqué toute vie biologique sur Terre, des robots, appellés "drones travailleurs" commencèrent à batir leur propre socièté sur les ruines de leurs créateurs.
            <br>Mais cette autonomie ne plait pas à la compagnie mère des drones (basée sur d'autres planètes), qui envoie des drones tueurs éliminer les drones travailleurs.
          </p>
        </div>
      </div>
      <div class="row container flow-text">
        <div class="col m6 s12">
          <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator width90" src="img/glitch_production.jpg" alt="logo glitch production">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Glitch Productions<i class="material-icons right">more_vert</i></span>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Studio d'animation<i class="material-icons right">close</i></span>
              <p class="flow-text">Glitch Productions est un studio d'animation basé en Australie, fondé par 2 frères du nom de Luke et Kevin Lerdwichagul.
                <br>Ils ont déjà créé deux séries : Sunset Paradise et META Runner. 
                <br>Ils ont aussi une autre chaine YouTube, SMG4, sur laquelle ils publient des memes animés par leurs soins.
              </p>
            </div>
          </div>
        </div>

          <div class="col m6 s12">
            <div class="card">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator width100" src="https://64.media.tumblr.com/b0306dd13a11105afc9a0ad0b3ec2e29/a1d40233ab98ef55-62/s540x810/48195fa3ab4686d5d80a78defce31510e2e15226.gif" alt="Murder">
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Murder Drones<i class="material-icons right">more_vert</i></span>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">Les MECHANTS olala<i class="material-icons right">close</i></span>
                <p class="flow-text">Les murder drones ont été envoyés par la compagnie mère JCJenson. Ils sont programmés pour éradiquer les drones travailleurs.
                  <br>Ces drones sont de véritables machines de guerre, équipés de missiles, canons et autres gadgets.
                </p>
              </div>
            </div>
          </div>
          <div class="col m6 s12">
            <div class="card">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator width100" src="img/railgun.jpg" alt="railgun">
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Uzi<i class="material-icons right">more_vert</i></span>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">Personnage principal<i class="material-icons right">close</i></span>
                <p class="flow-text">Uzi est un drone travailleur qui vit dans un bunker avec d'autres drones, notamment son père Khan qui à construit les portes du Bunker. 
                  <br>Elle n'aime pas le fait que les worker drones restent enfermés passivement, et décide donc de créer une arme pouvant détruire les Murder Drones pour enfin être libérée.
                </p>
              </div>
            </div>
          </div> 
          <div class="col m6 s12">
            <div class="card">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="https://media.tenor.com/zhPvMjkkOZIAAAAd/murder-drones.gif" alt="Branded peeennn">
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">A voir?<i class="material-icons right">more_vert</i></span>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">Pouquoi faudrait-il le voir?<i class="material-icons right">close</i></span>
                <p class="flow-text">De tous les projets de Glitch Productions "Murder drones" est le plus ambitieux.
                  <br>Les détails, les couleurs et les animations sont dignes d'un studio professionnel.
                  <br>Les personnages sont droles et leur design "mignon" contraste bien avec le monde post-apocalyptique.
                  <br><a href="https://www.youtube.com/watch?v=mImFz8mkaHo" target="_blank">Nous vous recommandons de regarder ce premier épisode.</a> 
                  <br>aming🤩😎
                </p>
              </div>
            </div>
          </div>
        </div>

        <?php require "components/footer.php" ?>

    <!--JavaScript at end of body for optimized loading-->
    <script src="js/jquery.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
