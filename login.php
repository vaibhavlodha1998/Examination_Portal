
<?php

	include('db.php');
	
	session_start();
<<<<<<< HEAD
	$email=$_SESSION['email'];

	if(isset($_POST['email']))// If form submitted, insert values into the database.
=======
	$_SESSION["username"] = $_POST['email'];
	
	if(isset($_POST['submit']))// If form submitted, insert values into the database.
>>>>>>> origin/master
	{
		$email = $_POST['email']; 
		$password = $_POST['password'];
		$role = $_POST['role'];
		//$username = stripslashes($email);
		//$username = mysql_real_escape_string($email); 	
		//$password = stripslashes($password);
		//$password = mysql_real_escape_string($password);
		//Checking is user existing in the database or not
		
		if ($role=="ADMINISTRATOR")
		{
			$query = "SELECT * FROM `admin` WHERE email='".$email."' and password='".$password."'";



			$result = $db->query($query);		
			$rows = mysqli_num_rows($result);

			if($rows==1)
			{
			
				header("Location: adminpanel.php"); // Redirect user to index.php
			}
			else
			{
			echo"something is wrong1";
			}
		}
		else if($role=="INSTITUTE")
		{	

			$query = "SELECT * FROM `institute` WHERE email='$email' and password='".$password."'";

			$result = $db->query($query);
		
			$rows = mysqli_num_rows($result);
			
			if($rows == 1)
			{
			

				header("Location: institutepanel.php"); // Redirect user to index.php
			}
			else
			{
			echo"something is wrong2";
			}
		}
	}
?>
			