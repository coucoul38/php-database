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
            $sql = "SELECT COUNT(*) FROM users";
            $pre = $pdo->prepare($sql); 
            $pre->execute();
            $userCount = $pre->fetchColumn();
            echo "<br>Il y a ".$userCount." utilisateurs en tout!<br>";

            $sql = "SELECT * FROM users";
            $pre = $pdo->prepare($sql); 
            $pre->execute();
            $userList = $pre->fetchall();
            //print_r($userList);
            foreach($userList as $user){
                echo "<br>ID : ".$user[0]."<br>"; 
                ?>
                <form method='post' action="actions/renameUser.php">
                    <input type='hidden' name="id" value="<?php echo $user[0]; ?>">
                    <input type='text' name="username" value="<?php echo $user[1] ?>">
                    <input type='submit' value="Change name">
                </form>
                <?php
                echo "Email : ".$user[2]."<br>";
                echo "Password : ".$user[3]."<br>";
                echo $user[4]==0?"Utilisateur":"Admin";
                ?>
                <form method='post' action="actions/deleteUser.php">
                    <input type='hidden' name="id" value="<?php echo $user[0]; ?>">
                    <input type='submit' value='Delete user'>
                </form>
                <form method='post' action="actions/changeAdmin.php">
                    <input type='hidden' name='id' value="<?php echo $user[0]; ?>">
                    <input type='hidden' name='admin' value="<?php echo $user[4]; ?>">
                    <input type='submit' value='<?php echo $user[4]==0?"Utilisateur":"Admin"?>'>
                </form>
                <br><br>
                
                <?php
            }
        }
        else{
            //header('Location: index.php');
            echo "Vous n'êtes pas admin";
            exit();
        }
        ?>
        
    </body>
</html>



