<<<<<<< HEAD
<?php

$sname = "localhost";
$uname = "root";
$password ="16102002";

$db_name = "mydb";

$conn = mysqli_connect($sname, $uname, $password, $db_name, 3307);

if(!$conn) {
    echo "Connection Failed!";
    exit();
}

=======
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


>>>>>>> 4c4b82955909e36c7b92103d06deee56bd9c7507
?>