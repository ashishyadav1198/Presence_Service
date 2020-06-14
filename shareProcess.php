<?php
	require("db.php");
	session_start();
	$username = stripslashes($_SESSION['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($con,$username);
	$file_name = stripslashes($_SESSION['doc_name']);
        //escapes special characters in a string
	$file_name = mysqli_real_escape_string($con,$file_name);
	if(isset($_POST['private'])) {
		$email = stripslashes($_POST['email']);
		$email = mysqli_real_escape_string($con,$email);	
	}
	
	if(isset($_POST['public']))
		$query = "INSERT INTO `access` VALUES('$username','$file_name','all')";
	else
		$query = "INSERT INTO `access` VALUES('$username','$file_name',$email)";
	$result = mysqli_query($con,$query) or die(mysqli_error($con));
	header("Location: share.php")
?>