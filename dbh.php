<?php

$servername = "localhost";
$dBUsername = "minaxi";
$dbPassword = "minaxi1234";
$dBName = "employment";

$conn = mysqli_connect($servername, $dBUsername, $dbPassword, $dBName);

if(!$conn){
	echo "Databese Connection Failed";
}

 

?>