<?php
echo "<pre>";
print_r($_POST);
echo "</pre>"
?>

<?php
require_once "../cfg/config.php"; 
$projectName = $_POST['title'];
$sql = "INSERT INTO projects(name) VALUES (:title)";
$dataBinded=array(
    ':title' => $projectName
);

if(empty($projectName)){
    $sendToDb = FALSE;
    $_SESSION['error']="Vous n'avez pas mis de Titre";
}
else{
    $sendToDb = TRUE;
}

if($sendToDb){
    $pre = $pdo->prepare($sql);
    $pre->execute($dataBinded);
    header('Location:../admin.php?id=projects');//on le redirige sur la page d'accueil du site
}
else{
    echo $_SESSION['error'];
    header('Location:../admin.php?id=projects');//on le redirige sur la page d'accueil du site !
}
?>