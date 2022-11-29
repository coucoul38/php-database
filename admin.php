<?php require "cfg/config.php"; 
if(!isset($_SESSION['user']) || $_SESSION['user']['admin']==0){
    header('Location: index.php');
    exit();
}
?>


<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Panel admin</title>
    </head>
    <body>
        <h1>Panel admin</h1>
    </body>
</html>