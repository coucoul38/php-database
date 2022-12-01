<?php
require_once "../cfg/config.php"; 
$id = $_POST['id'];
$newUsername = $_POST['username'];
if(empty($id)){
    echo "Error : ID is empty";
}
else{
    echo "ID: ".$id;
    $sql = "UPDATE users SET username = '$newUsername' WHERE id='$id'";
    $pre = $pdo->prepare($sql); 
    $pre->execute();
    header("Location:../admin.php?id=users");//on le redirige sur la page d'accueil du site !
}
?>