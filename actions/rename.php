<?php
require_once "../cfg/config.php";
require "../components/securityAdmin.php";
$id = $_POST['id'];
$newName = $_POST['newName'];
$h2 = $_POST['h2'];
$p1 = $_POST['p1'];
if(empty($id)){
    echo "Error : ID is empty";
}
else{
    echo "ID: ".$id;
    if($_GET['id']=='user'){
        $sql = "UPDATE users SET username = '$newName' WHERE id='$id'";
    }
    elseif($_GET['id']=='project'){
        $sql = "UPDATE projects SET name = '$newName' WHERE id='$id'";
        $pre = $pdo->prepare($sql); 
        $pre->execute();
        $sql = "UPDATE projects SET h2 = '$h2' WHERE id='$id'";
        $pre = $pdo->prepare($sql); 
        $pre->execute();
        $sql = "UPDATE projects SET p1 = '$p1' WHERE id='$id'";
    }
    $pre = $pdo->prepare($sql); 
    $pre->execute();
    if($_GET['id']=='user'){
        header("Location:../admin.php?id=users");//on le redirige sur la page d'accueil du site !
    }
    else{
        echo $h2;
        //header("Location:../admin.php?id=projects");//on le redirige sur la page d'accueil du site !
    }
}
?>