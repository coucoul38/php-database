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
            echo "Bienvenue sur le pannel admin ".$_SESSION['user']['username']."<br>";
            ?>
            <form method='post' action = "admin.php?id=users">
                <input type='submit' value='Gestion des utilisateurs'>
            </form>
            <form method='post' action = "admin.php?id=projects">
                <input type='submit' value='Gestion des projets'>
            </form>
            <?php
            if($_GET['id']=="projects"){
                $sql = "SELECT COUNT(*) FROM projects";
                $pre = $pdo->prepare($sql); 
                $pre->execute();
                $projectCount = $pre->fetchColumn();
                echo "<br>Il y a ".$projectCount." projets en tout!<br>";

                $sql = "SELECT * FROM projects";
                $pre = $pdo->prepare($sql); 
                $pre->execute();
                $projectList = $pre->fetchall();
                print_r($projectList);
                ?>
                <h4>Créer un nouveau projet</h4>
                <form method='post' action='actions/createProject.php'>
                    <input type='text' name='title' value='Entrez un titre'>
                    <input type='submit' value='Créer le projet'>
                </form>
                <?php
                foreach($projectList as $project){
                    echo "<br><b>ID :</b> ".$project[0]."<br>"; 
                    ?>
                    <form method='post' action="actions/rename.php?id=project">
                        <input type='hidden' name="id" value="<?php echo $project[0]; ?>">
                        <input type='text' name="newName" value="<?php echo $project[1] ?>">
                        <input type='submit' value="Change name">
                    </form>
                    <form method='post' action="actions/delete.php?id=project">
                        <input type='hidden' name="id" value="<?php echo $project[0]; ?>">
                        <input type='submit' value='Delete project'>
                    </form>
            <?php
                }
            }
            elseif($_GET['id']=="users"){
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
                    echo "<br><b>ID :</b> ".$user[0]."<br>"; 
                    ?>
                    <form method='post' action="actions/rename.php?id=user">
                        <input type='hidden' name="id" value="<?php echo $user[0]; ?>">
                        <input type='text' name="newName" value="<?php echo $user[1] ?>">
                        <input type='submit' value="Change name">
                    </form>
                    <?php
                    echo "<b>Email :</b> ".$user[2]."<br>";
                    echo "<b>Password :</b> ".$user[3]."<br>";
                    ?>
                    <form method='post' action="actions/delete.php?id=user">
                        <input type='hidden' name="id" value="<?php echo $user[0]; ?>">
                        <input type='submit' value='Delete user'>
                    </form>
                    <form method='post' action="actions/changeAdmin.php">
                        <input type='hidden' name='id' value="<?php echo $user[0]; ?>">
                        <input type='hidden' name='admin' value="<?php echo $user[4]; ?>">
                        <input type='submit' value='<?php echo $user[4]==0?"Utilisateur":"Admin"?>'>
                    </form>
                    <?php
                }
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