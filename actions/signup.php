<?php
echo "<pre>";
print_r($_POST);
echo "</pre>"
?>

<?php
require_once "../cfg/config.php"; 
$sql = "INSERT INTO user(username,email,password) VALUES(:username,:email,:password)";
$dataBinded=array(
    ':username'=> $_POST['username'],
    ':email'   => $_POST['email'],
    ':password'=> $_POST['password']
);
$pre = $pdo->prepare($sql); //on prévient la base de données qu'on va executer une requête
$pre->execute($dataBinded); //on l'execute

header('Location:../index.php');//on le redirige sur la page d'accueil du site !
?>