<?php

$serverName = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "equipment_rental";

$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbname);

if(!$conn)
{

	die("failed to connect! :" . mysqli_connect_error());
}