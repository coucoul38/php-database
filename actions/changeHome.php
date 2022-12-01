<?php
require_once "../cfg/config.php";
require "../components/securityAdmin.php";
$h1 = $_POST['h1'];
$h2 = $_POST['h2'];
$p1 = $_POST['p1'];
$p2 = $_POST['p2'];
$pCard1 = $_POST['pCard1'];
$pCard2 = $_POST['pCard2'];
$card1title = $_POST['card1title'];
$card2title = $_POST['card2title'];

$sql = "UPDATE home SET h1='$h1', h2='$h2', p1='$p1', p2='$p2', cardp1='$pCard1', cardp2='$pCard2', card1title='$card1title', card2title='$card2title' WHERE id=1";
$pre = $pdo->prepare($sql); 
$pre->execute();

header("Location:../index.php");//on le redirige sur la page d'accueil du site !
?>