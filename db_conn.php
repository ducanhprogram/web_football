<?php 

$sname = "localhost";
$uname = "root";
$password = "16102002";

$db_name = "my_db";

$conn = mysqli_connect($sname, $uname, $password, $db_name, 3307);


if(!$conn) {
    echo "Connection Failed";
    exit();
}


?>