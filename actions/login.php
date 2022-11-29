<?php
echo "<pre>";
print_r($_POST);
echo "</pre>"
?>

<?php 
require_once "../cfg/config.php"; 
$sql = "SELECT * FROM users WHERE username='".$_POST['username']."' AND password='".$_POST['password']."'";
$pre = $pdo->prepare($sql); 
$pre->execute();
$user = $pre->fetch(PDO::FETCH_ASSOC);
if(empty($user)){ //vérifie si le resultat est vide !
     //non connecté
     echo "Utilisateur ou mot de passe incorrect !";
}else{
    session_start();
     $_SESSION['user'] = $user; //on enregistre que l'utilisateur est connecté
}

header('Location:../account.php');//on le redirige sur la page d'accueil du site !
?>