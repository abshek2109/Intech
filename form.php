<?php
    
	include("connection.php");
	error_reporting(0);


if(isset($_POST['submit']))
{
	$name = $_POST['name'];
	$sol = $_POST['sol'];
	$desc = $_POST['desc'];
    session_start();
    $user = $_SESSION["user"];


	$sql = $mysqli->query("INSERT INTO `form`(`name`, `desc`, `sol`,`user`) VALUES ('$name','$desc','$sol','$user')");
	
	echo "<script>alert('Filled Successfully')</script>";

	header("Location:http://localhost/startup/home.php");

}
?>