<?php
require_once "../cfg/config.php";
require "../components/securityAdmin.php";
$id = $_POST['id'];
$admin = $_POST['admin'];
elseif($home){
    //$sql = "UPDATE home SET admin = '0' WHERE id='$id'"; 
    $pre = $pdo->prepare($sql); 
    $pre->execute();
    header("Location:../index.php");//on le redirige sur la page d'accueil du site !
}
?>