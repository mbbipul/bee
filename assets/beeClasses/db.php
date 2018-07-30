<?php
try{

//error_reporting(0);

	$dbhost='localhost';
	$dbuser='root';
	$dbpass='';
	$dbname='bee';
	$conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);	
	$conn->exec("set names utf8");
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $ex)
{
    print_r($ex);
    die();
}
?>