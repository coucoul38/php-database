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
if(isset($_GET['username']) && isset($_GET['password'])){
     header('Location:../account.php?id=login');//on le redirige sur la page d'accueil du site !
}
else{
     header('Location:../account.php?id=login&sent=false');//on le redirige sur la page d'accueil du site !
}
echo "Password: ".$password;
echo " Username: ".$username;
?>