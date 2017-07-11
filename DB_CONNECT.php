<?php
global $PDO,$connection;
try{
	$PDO = new PDO('mysql:host=tsuts.tskoli.is;dbname=database_nafnið', 'kennitalan', 'password');
	$PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$PDO->exec('SET NAMES "utf8"');
	$tokst= "Tenging tókst við gagnagrunn";
}
catch (PDOException $e){
	$connection = false;
	echo "tenging tókst ekki". "<br>" . $e->getMessage();
	exit();
}
$connection = true;
function ExitConnection(){
	exit();
}
