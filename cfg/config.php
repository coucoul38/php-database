
<?php
session_start();
//On a une variable $pdo qui va nous permettre de communiquer avec notre base de données !
$pdo = new PDO(
	'mysql:host=localhost;dbname=grpa1-11php;',
	'root',
	'root',
	array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8')
);
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
?>