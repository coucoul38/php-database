<?php
session_start();

require_once "../cfg/config.php"; 
$username = $_POST['username'];
$password = $_POST['password'];
$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$pre = $pdo->prepare($sql); 
$pre->execute();
$user = $pre->fetch(PDO::FETCH_ASSOC);
if(empty($user)){ //vérifie si le resultat est vide !
     //non connecté
     echo "Utilisateur ou mot de passe incorrect !";
}else{
     $_SESSION['user'] = $user; //on enregistre que l'utilisateur est connecté
     echo "amogus";
}

if($_GET['sentToDB']==FALSE){
     echo "Vous n'avez pas rempli tous les champs"
}
echo "Password: ".$password;
echo " Username: ".$username;
header('Location:../account.php');//on le redirige sur la page d'accueil du site !
?>