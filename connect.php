<?php

$db_driver="mysql";
$host="localhost";
$database="laba5_itech";
$dch="$db_driver:host=$host;dbname=$database";
$username="root";
$password="";
try
{
$pdo=new PDO($dch,$username,$password);
}
catch(PDOException $e)
{
	print "Error";
	die();
}
?>
