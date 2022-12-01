<?php
//sauvegarder le fichier dans un dossier spécifique
$destination = "img/".$_FILES['image']['name'];
move_uploaded_file($_FILES['image']['tmp_name'],$destination);
?>