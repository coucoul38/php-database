<?php
echo "<pre>";
print_r($_POST);
echo "</pre>"
?>

<?php
require_once "../cfg/config.php"; 
$sql = "INSERT INTO users(username,email,password) VALUES(:username,:email,:password)";
$dataBinded=array(
    ':username' => $_POST['username'],
    ':email'   => $_POST['email'],
    ':password'=> $_POST['password']
);
if(empty($_POST['username'])){
    $sendToDb = FALSE;
}
elseif(empty($_POST['email'])){
    $sendToDb = FALSE;
}
elseif(empty($_POST['password'])){
    $sendToDb = FALSE;
}
else{
    $sendToDb = TRUE;
}

if($sendToDb){
    $pre = $pdo->prepare($sql);
    $pre->execute($dataBinded);
}
else{
    header('Location:../account.php?sentToDB=FALSE');//on le redirige sur la page d'accueil du site !
}
//:email et :password sont bindés dans ma requêtes
//mon tableau dataBinded réutilise ces clés bindées :email et :password
//la donnée est liée au bind !
//lorsqu'on execute la requête, on indique à quelles données correspondent chaque "bind"

header('Location:../account.php');//on le redirige sur la page d'accueil du site !
?>