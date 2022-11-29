<?php
$sql = "SELECT * FROM projects WHERE id = :id";
$db=array(
    ':id' => $_GET['id']
);
$pre = $pdo => 