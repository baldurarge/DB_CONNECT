<?php
global $PDO,$connection;
try{
	$PDO = new PDO('mysql:host= ;dbname= ', 'login', 'password');
	$PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$PDO->exec('SET NAMES "utf8"');
	$tokst= "Connection Was Successful";
}
catch (PDOException $e){
	$connection = false;
	echo "Connection error --- ". "<br>" . $e->getMessage();
	exit();
}
$connection = true;
function ExitConnection(){
	exit();
}
