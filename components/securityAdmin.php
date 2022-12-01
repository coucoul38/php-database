<?php 
 if(empty($_SESSION['user']) || $_SESSION['user']['admin']==0){
    header('Location: index.php');
    echo "Vous n'êtes pas admin";
    exit();
 }
?>