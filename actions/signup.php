<?php
echo "<pre>";
print_r($_POST);
echo "</pre>"
?>

<?php
require_once "../cfg/config.php"; 
$username = $_POST['username'];
$email = $_POST['email'];
$password = hash("sha256", "jijrfjiohh&__àuioehuihejkdjkhedhhuie64554556fehhuiyuhjdfj".$_POST['password'], FALSE);

$sql = "INSERT INTO users(username,email,password) VALUES(:username,:email,:password)";
$dataBinded=array(
    ':username' => $username,
    ':email'   => $email,
    ':password'=> $password 
);

if(empty($username)){
    $sendToDb = FALSE;
    $_SESSION['error']="Vous n'avez pas mis de pseudonyme";
}
elseif(empty($password)){
    $sendToDb = FALSE;
    $_SESSION['error']="Vous n'avez pas mis de mot de passe";
}
elseif(empty($email)){
    $sendToDb = FALSE;
    $_SESSION['error']="Vous n'avez pas mis d'email";
}
else{
    $sendToDb = TRUE;
}

if($sendToDb){
    $pre = $pdo->prepare($sql);
    $pre->execute($dataBinded);
    header('Location:../account.php?id=login');//on le redirige sur la page d'accueil du site
}
else{
    echo $_SESSION['error'];
    header('Location:../account.php?id=signup');//on le redirige sur la page d'accueil du site !
}
?>