<?php
require_once "../cfg/config.php"; 
$id = $_POST['id'];
if(empty($id)){
    echo "Error : ID is empty";
}
else{
    echo "ID: ".$id;
    $sql = "DELETE FROM users WHERE id='$id'";
    $pre = $pdo->prepare($sql); 
    $pre->execute();
    header("Location:../admin.php");//on le redirige sur la page d'accueil du site !
}
?>