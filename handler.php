<?php
	require_once 'settings.php';
	require_once 'Database.php';
	$db = new Database($host, $uname, $password, $dbname);
	
	$db->setBook($_POST["name"], $_POST["author"], $_POST["year"]);
	
?>