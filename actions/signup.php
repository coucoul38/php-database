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
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

//:email et :password sont bindés dans ma requêtes
//mon tableau dataBinded réutilise ces clés bindées :email et :password
//la donnée est liée au bind !
//lorsqu'on execute la requête, on indique à quelles données correspondent chaque "bind"

header('Location:../account.php');//on le redirige sur la page d'accueil du site !
?>