<?php
    session_start();
    include_once("conn.php");
    $query = "SELECT * FROM info";
    $result = mysqli_query($conn, $query);
    if (($_SESSION["username"] == "admin") && ($_SESSION["userpass"] = "admin")) 
		{
            header("location:landing.php");
    	}
	else
		{
        	header("location:landing.php");
    	}
?>