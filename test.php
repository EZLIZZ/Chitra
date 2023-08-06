<?php
	require_once("conn.php");
	session_start();
	if(isset($_POST['submit'])) 
		{
    		$Uname = $_POST['Uname'];
    		$Password = $_POST['Password'];
   		}
		   $sql = "SELECT * FROM info WHERE Uname = $Uname";
		   $result = $conn->query($sql);
		   
		   if ($result->num_rows == 1) {
			   $row = $result->fetch_assoc();
			   
			   // Compare password
			   if ($Password === $row['Password']) {
				$output = mysqli_fetch_assoc($result);
				$_SESSION["username"] = $output['Uname'];
				$_SESSION["userpass"] = $output['Pass'];
				header("location:landing.php");
			   } else {
				$_SESSION["login-msg"] = "Incorrect Username or Password";
				header("location:index.php");
			   }
		   } else {
			$_SESSION["login-msg"] = "Incorrect Username or Password";
			header("location:index.php");
		   }
		   
		   $conn->close();
		   ?>
?>