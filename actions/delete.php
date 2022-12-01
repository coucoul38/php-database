<?php
require_once "../cfg/config.php"; 
$id = $_POST['id'];
if(empty($id)){
    echo "Error : ID is empty";
}
else{
    echo "ID: ".$id;
    if($_GET['id']=='user'){
        $sql = "DELETE FROM users WHERE id='$id'";
    }
    elseif($_GET['id']=='project'){
        $sql = "DELETE FROM projects WHERE id='$id'";
    }
    $pre = $pdo->prepare($sql); 
    $pre->execute();
    if($_GET['id']=='user'){
        header("Location:../admin.php?id=users");//on le redirige sur la page d'accueil du site !
    }
    else{
        header("Location:../admin.php?id=projects");
    }
}
?>