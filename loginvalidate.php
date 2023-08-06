<?php
	require_once("conn.php");
	session_start();
	if(isset($_POST['submit'])) 
		{
    		$Uname = $_POST['Username'];
    		$Password = $_POST['Pass'];
   		}
    $sql = "Select * from info where Uname='$Uname' and Password = '$Password'";
    $result = mysqli_query($conn, $sql);
	$row = mysqli_num_rows($result);
	if($row <> 0)
		{
			$output = mysqli_fetch_assoc($result);
			$_SESSION["username"] = $output['Uname'];
			$_SESSION["userpass"] = $output['Password'];
			header("location:landing.php");
		}
	else
		{
			$_SESSION["login-msg"] = "Incorrect Username or Password";
			header("location:index.php");
		}
?>