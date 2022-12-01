<?php
require_once "../cfg/config.php";
require "../components/securityAdmin.php";
echo $_POST['h1'];
echo $_POST['h2'];
echo $_POST['p1'];
echo $_POST['p2'];
echo $_POST['pCard1'];
echo $_POST['pCard2'];
$sql = "UPDATE home";
$pre = $pdo->prepare($sql); 
$pre->execute();
//header("Location:../index.php");//on le redirige sur la page d'accueil du site !
?>