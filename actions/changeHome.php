<?php
require_once "../cfg/config.php";
require "../components/securityAdmin.php";
$home = $_POST['home'];
$admin = $_POST['admin'];
if($home){
    $sql = "UPDATE home SET ";
    echo $_POST['h1'];
    echo $_POST['h2'];
    echo $_POST['p1'];
    echo $_POST['p2'];
    echo $_POST['pCard1'];
    echo $_POST['pCard2'];
    $pre = $pdo->prepare($sql); 
    $pre->execute();
    header("Location:../index.php");//on le redirige sur la page d'accueil du site !
}
?>