<?php
require_once "../cfg/config.php"; 
$username = $_POST['username'];
$password = hash("sha256", "$_POST['password']", FALSE);
$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$pre = $pdo->prepare($sql); 
$pre->execute();
$user = $pre->fetch(PDO::FETCH_ASSOC);

if(empty($user)){
     $_SESSION['error']="Mot de passe ou user incorrect";
}

if(empty($password)){
     $_SESSION['error']="Vous n'avez pas entré le mot de passe";
}

if(empty($username)){ //vérifie si le resultat est vide !
     //non connecté
     $_SESSION['error']="Vous n'avez pas rempli le champ utilisateur";
}

if(isset($username) && isset($password)){
     $_SESSION['user'] = $user; //on enregistre que l'utilisateur est connecté
     echo "User connecté ";

}
echo "Password: ".$password;
echo " Username: ".$username;

header("Location:../account.php?id=login");//on le redirige sur la page d'accueil du site !
?>