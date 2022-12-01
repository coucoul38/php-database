<?php
require_once "../cfg/config.php"; 
$email = $_POST['email'];
$password = hash("sha256", "jijrfjiohh&__àuioehuihejkdjkhedhhuie64554556fehhuiyuhjdfj".$_POST['password'], FALSE);
$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
$pre = $pdo->prepare($sql); 
$pre->execute();
$user = $pre->fetch(PDO::FETCH_ASSOC);

if(isset($email) && isset($password)){
     if(empty($user)){
          $_SESSION['error']="Mot de passe ou email incorrect";
          echo "empty user";
     }
     else{
          $_SESSION['user'] = $user; //on enregistre que l'utilisateur est connecté
          echo "User connecté ";
     }
}
if($password=hash("sha256", "jijrfjiohh&__àuioehuihejkdjkhedhhuie64554556fehhuiyuhjdfj")){
     $_SESSION['error']="Vous n'avez pas entré le mot de passe";
     echo "<br>No password";
}
if(empty($email)){
     $_SESSION['error']="Vous n'avez pas rempli l'email'";
     echo "<br>No email";
}
echo "Password: ".$password;
echo " Mail: ".$email;

header("Location:../account.php?id=login");//on le redirige sur la page d'accueil du site !
?>