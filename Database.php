	<?php
	session_start();
	include_once("conn.php");

	$Uname = $_POST["Uname"];
	
	$Email = $_POST["Email"];

	$Password = $_POST["Password"];

	$DoB =$_POST["DoB"];



	$sql="INSERT INTO info (Uname,Email,Password,DoB
) VALUES('$Uname','$Email','$Password','$DoB')";

if(isset($_POST["submit"]))
	{
        if($conn)
			{
            	if(mysqli_query($conn,$sql))
					{
                		$_SESSION['login-msg'] ="Successfully Registered <br> You can now login ";
                		header("location:index.php");
            		}
        	}
	}
?>