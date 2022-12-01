<?php
require_once "../cfg/config.php";
require "../components/securityAdmin.php";
$id = $_POST['id'];
$newName = $_POST['newName'];
$h2 = $_POST['h2'];
$p1 = $_POST['p1'];
$description = $_POST['description'];
if(empty($id)){
    echo "Error : ID is empty";
}
else{
    echo "ID: ".$id;
    if($_GET['id']=='user'){
        $sql = "UPDATE users SET username = '$newName' WHERE id='$id'";
    }
    elseif($_GET['id']=='project'){
        $sql = "UPDATE projects SET name='$newName', h2='$h2', p1='$p1', description='$description' WHERE id='$id'";
    }
    $pre = $pdo->prepare($sql); 
    $pre->execute();
    if($_GET['id']=='user'){
        header("Location:../admin.php?id=users");//on le redirige sur la page d'accueil du site !
    }
    else{
        header("Location:../admin.php?id=projects");//on le redirige sur la page d'accueil du site !
    }
}
?>