<?php require "cfg/config.php";
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
      <?php 
      $title = "Php projet Noham et Justin";
      require "components/head.php";
      require "components/securityAdmin.php";
      ?>
    </head>

    <body>
        <?php require "components/navbar.php";
        
        if($_SESSION['user']['admin']==1){
            echo "Bienvenue sur le pannel admin ".$_SESSION['user']['username']."<br>";
            ?>
            <form method='post' action = "admin.php?id=users">
                <input type='submit' value='Gestion des utilisateurs'>
            </form>
            <form method='post' action = "admin.php?id=projects">
                <input type='submit' value='Gestion des projets'>
            </form>
            <form method='post' action="admin.php?id=home">
                <input type='submit' value="Gestion de la page d'accueil">
            </form>
            <?php
            //GESTION DES PROJETS
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
                ?>
                <h4>Créer un nouveau projet</h4>
                <form method='post' action='actions/createProject.php' enctype="multipart/form-data">
                    <input type='text' name='title' value='Entrez un titre'>
                    <input type='file' name='image'>
                    <input type='submit' value='Créer le projet'>
                </form>
                <?php
                foreach($projectList as $project){
                    echo "<br><b>ID :</b> ".$project[0]."<br>"; 
                    ?>
                    <form method='post' action="actions/rename.php?id=project" enctype="multipart/form-data">
                        <input type='hidden' name="id" value="<?php echo $project[0]; ?>">
                        <input type='text' name="newName" value="<?php echo $project[1]; ?>">
                        <input type='submit' value="Change name">
                        <input type='file' name='image'>
                    </form>
                    <form method='post' action="actions/delete.php?id=project">
                        <input type='hidden' name="id" value="<?php echo $project[0]; ?>">
                        <input type='submit' value='Delete project'>
                    </form>
            <?php
                }
            }
            elseif($_GET['id']=="users"){ //GESTION DES UTILISATEURS
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
            elseif($_GET['id']=="home"){//GESTION DE L'ACCUEIL
                $sql = "SELECT * FROM home";
                $pre = $pdo->prepare($sql); 
                $pre->execute();
                $home = $pre->fetchColumn();
                ?>
                <form method='post' action ="actions/changeHome.php">
                    <textarea name="h1"><?php echo $home['h1'] ?></textarea>
                    <textarea name="h2"><?php echo $home['h2'] ?></textarea>
                    <textarea name="p1"><?php echo $home['p1'] ?></textarea>
                    <textarea name="p2"><?php echo $home['p2'] ?></textarea>
                    <textarea name="pCard1"><?php echo $home['pCard1'] ?></textarea>
                    <textarea name="pCard2"><?php echo $home['pCard2'] ?></textarea>

                    <input type="file" name="img">
                    <img src="<?php echo $home["img"] ?>" width="100px"  >

                    <input type='submit' value= "Change home page!">
                </form>
                <?php
            }
        }
        ?>
    </body>
</html>