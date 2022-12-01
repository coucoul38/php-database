<?php
require_once "../cfg/config.php";
require "../components/securityAdmin.php";
$id = $_POST['id'];
$img = $_FILES['image']['tmp_name'];
if(empty($id)){
    echo "Error : ID is empty";
}
else{
    if(empty($img)){
        echo "No img";
    }
    else{
        require "upload_file.php";
        echo "ID: ".$id;
        $sql = "UPDATE projects SET img_parallax = '$img' WHERE id='$id'";
        $pre = $pdo->prepare($sql); 
        $pre->execute();
        echo $img;
        header("Location:../admin.php?id=projects");//on le redirige sur la page d'accueil du site !
    }
}
?>