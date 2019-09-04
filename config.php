<?php
/**
 * using mysqli_connect for database connection
 */
 
$databaseHost = 'localhost';
//$databaseName = 'id5516828_testingmember';
//$databaseUsername = 'id5516828_adiewa';
//$databasePassword = 'Sarmon123';
$databaseName = 'test';
$databaseUsername = 'root';
$databasePassword = 'wibubawang';
 
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
 
?>