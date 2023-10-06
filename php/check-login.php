<<<<<<< HEAD
<?php
session_start();
include "../db_conn.php";

if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['role'])) {

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
        $username = test_input($_POST['username']);
	    $password = test_input($_POST['password']);
	    $role = test_input($_POST['role']);
        
        if (empty($username)) {
            header("Location: ../index.php?error=User Name is Required");
        }else if (empty($password)) {
            header("Location: ../index.php?error=Password is Required");
        }else {
            //Hashing the password
            $password = md5($password);

            $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
            $result = mysqli_query($conn, $sql);

            if(mysqli_num_rows($result) === 1) {
                //The user name must the unique
                $row = mysqli_fetch_assoc($result);
=======
<?php  
session_start();
include "../db_conn.php";

if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['role'])) {

	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}

	$username = test_input($_POST['username']);
	$password = test_input($_POST['password']);
	$role = test_input($_POST['role']);

	if (empty($username)) {
		header("Location: ../index.php?error=User Name is Required");
	}else if (empty($password)) {
		header("Location: ../index.php?error=Password is Required");
	}else {

		// Hashing the password
		$password = md5($password);
        
        $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
        	// the user name must be unique
        	$row = mysqli_fetch_assoc($result);
>>>>>>> 4c4b82955909e36c7b92103d06deee56bd9c7507
        	if ($row['password'] === $password && $row['role'] == $role) {
        		$_SESSION['name'] = $row['name'];
        		$_SESSION['id'] = $row['id'];
        		$_SESSION['role'] = $row['role'];
        		$_SESSION['username'] = $row['username'];

<<<<<<< HEAD
        		header("Location: ../home.php");      
            }else {
=======
        		header("Location: ../home.php");

        	}else {
>>>>>>> 4c4b82955909e36c7b92103d06deee56bd9c7507
        		header("Location: ../index.php?error=Incorect User name or password");
        	}
        }else {
        	header("Location: ../index.php?error=Incorect User name or password");
        }
<<<<<<< HEAD
          
        }
}else{
    header("Location: ../index.php");
}

?>
=======

	}
	
}else {
	header("Location: ../index.php");
}
>>>>>>> 4c4b82955909e36c7b92103d06deee56bd9c7507
