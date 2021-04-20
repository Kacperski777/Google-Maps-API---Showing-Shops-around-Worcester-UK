<?php

$serverName = "localhost";
$dBUName = "root";
$dBPName = "";
$dBName = "phpproject01";

$conn = mysqli_connect($serverName,$dBUName,$dBPName,$dBName);

if (!$conn){
	die("Connection failed: " . mysqli_connect_error);
}