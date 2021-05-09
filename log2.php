<?php
    
	$server="localhost";
	$username="root";
	$password="";
	$db="strtup";


	$conn = mysqli_connect($server,$username,$password,$db) or die ("connection failed");


	session_start();


	$username = $_POST['email'];
	$password = $_POST['pass'];

	$result = mysqli_query($conn,"SELECT * FROM docreg WHERE email LIKE '{$username}' AND pass LIKE '{$password}' LIMIT 1");
	
$check = mysqli_fetch_array($result);
if(isset($check)){

	$_SESSION["user"] = $username;

	header("Location:http://localhost/startup/home.php");
		
		      
		    }	
	
	else  {
		
		echo "Wrong email or password";
header("Location:http://localhost/startup/log.html");
	       }
	
?>