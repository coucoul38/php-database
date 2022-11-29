<!DOCTYPE html>
  <html lang="fr">
    <head>
      <?php 
      $title = "Account";
      require "components/head.php"; 
      ?>
    </head>

    <body>
      <?php require "components/navbar.php"; ?>

      <h1 class="title center">Mon compte</h1>
      <?php if(!isset($_SESSION['user'])){?>
        <div class="row">
        <div class="col s12 m6 offset-m3">
          <div class="card cyan darken-4">
            <div class="card-content white-text">
              <div class="card-title">
                <?php if(isset($_GET['id']) && $_GET['id']=="login"){
                  echo "Se connecter";
                }
                else{
                  echo "Créer un compte";
                }?>
              </div>
              <p>
                <?php if(isset($_GET['id']) && $_GET['id']=="login"){
                  echo "<form method=\"post\" action=\"actions/login.php\">
                  <input type='text' name='username' placeholder=\"Pseudonyme\" class=\"white-text\">
                  <input type='password' name='password' placeholder=\"Mot de passe\" class=\"white-text\">
                  <input type='submit' name='login' value='Se connecter'>
              </form>";
                }
                else{
                  echo "<form method=\"post\" action=\"actions/signup.php\">
                  <input type='text' name='username' placeholder=\"Pseudonyme\" class=\"white-text\">
                  <input type='email' name='email' placeholder=\"Email\" class=\"white-text\">
                  <input type='password' name='password' placeholder=\"Mot de passe\" class=\"white-text\">
                  <input type='submit' name='signup' value='Créer le compte'>
              </form>";
                }?>
              </p>
            </div>
            <div class="card-action">
              <?php if(isset($_GET['id']) && $_GET['id']=="login"){
                  echo "<a href=\"account.php?id=signup\">Pas de compte ? Créer un compte</a>";
                }
                else{
                  echo "<a href=\"account.php?id=login\">Vous avez un compte ? Se connecter</a>";
                }?></a>
            </div>
          </div>
        </div>
      </div>
      <?php } 
      else{
        echo "amogus";
      }?>
      

    </body>
      
      <?php require "components/footer.php" ?>

      <!--JavaScript at end of body for optimized loading-->
      <script src="js/jquery.min.js"></script>
      <script src="js/materialize.min.js"></script>
      <script src="js/script.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </body>
  </html>
