<?php
require_once "../cfg/config.php";
require "../components/securityAdmin.php";
$id = $_POST['id'];
$newName = $_POST['newName'];
if(empty($id)){
    echo "Error : ID is empty";
}
else{
    echo "ID: ".$id;
    if($_GET['id']=='user'){
        $sql = "UPDATE users SET username = '$newName' WHERE id='$id'";
    }
    elseif($_GET['id']=='project'){
        $parallax_img = $_FILES['image']['tmp_name'];
        
        if(empty($parallax_img)){
            $sql = "SELECT img_parallax FROM projects WHERE id=$id";
            $pre = $pdo->prepare($sql); 
            $pre->execute();
            $parallax_img = $pre->fetchColumn();
            echo $parallax_img;
        }
        $sql = "UPDATE projects SET name = '$newName' WHERE id='$id'";
    }
    $pre = $pdo->prepare($sql); 
    $pre->execute();
    if($_GET['id']=='user'){
        header("Location:../admin.php?id=users");//on le redirige sur la page d'accueil du site !
    }
    else{
        header("Location:../admin.php?id=projects");//on le redirige sur la page d'accueil du site !
    }
}
?>