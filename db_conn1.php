<?php

$sname= "localhost";
$unmae= "root";
$password = "";

$db_name = "test_db";


// $con = mysqli_connect("localhost","root","",$database_name, 3307);
// $conn = new mysqli($name, $uname, $password, $db_name,3307);
$conn = mysqli_connect($sname, $unmae, $password, $db_name, 3307);

if (!$conn) {
	echo "Connection failed!";
}



