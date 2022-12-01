<?php
require_once "../cfg/config.php"; 
$id = $_POST['id'];
$admin = $_POST['admin'];
if(empty($id)){
    echo "Error : ID is empty";
}
elseif($admin){
    echo "ID: ".$id;
    $sql = "UPDATE users SET admin = '0' WHERE id='$id'";
    $pre = $pdo->prepare($sql); 
    $pre->execute();
    header("Location:../admin.php?id=users");//on le redirige sur la page d'accueil du site !
}
else{
    echo "ID: ".$id;
    $sql = "UPDATE users SET admin = '1' WHERE id='$id'";
    $pre = $pdo->prepare($sql); 
    $pre->execute();
    header("Location:../admin.php?id=users");//on le redirige sur la page d'accueil du site !
}
?>