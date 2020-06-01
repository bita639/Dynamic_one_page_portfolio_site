<?php

$host="localhost";
$name="root";
$pass="";
$db_name="cms";

$conn= mysqli_connect($host,$name,$pass,$db_name);

if ($conn->connect_error)
{
	echo "Failed". $conn->connect_error;
}

?>