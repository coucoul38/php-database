<?php require "cfg/config.php";?>

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
        if(empty($_SESSION['user'])){
            //header('Location: index.php');
            echo "Vous n'êtes pas connécté";
            exit();
        }
        elseif($_SESSION['user']['admin']==1){
            echo "Tah le panel admin";
            foreach()
        }
        else{
            //header('Location: index.php');
            echo "Vous n'êtes pas admin";
            exit();
        }
        ?>
    </body>
</html>



