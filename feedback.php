<?php
	session_start();
    $conn = mysqli_connect("localhost","root","","info") or die("Cannot connect to database");

	$name = $_POST["name"];
	
	$email = $_POST["email"];

	$subject = $_POST["subject"];

	$message =$_POST["message"];



	$sql="INSERT INTO feedback (name,email,subject,message
) VALUES('$name','$ email','$subject','$message')";

if(isset($_POST["submit"]))
	{
        if($conn)
			{
            	if(mysqli_query($conn,$sql))
					{
                		$_SESSION['login-msg'] ="Feedback Registered ";
                		header("location:contactus.php");
            		}
        	}
	}
?>