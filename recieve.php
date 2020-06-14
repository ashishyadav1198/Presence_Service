<!DOCTYPE html>
<html>
<head>
	<title>recive page</title>
</head>
<body>
	<?php
		require("auth.php");
		require("db.php");
		$username = stripslashes($_SESSION['username']);
        //escapes special characters in a string
		$username = mysqli_real_escape_string($con,$username);
		$file_name = stripslashes($_POST['file_name']);
        //escapes special characters in a string
		$file_name = mysqli_real_escape_string($con,$file_name);
	    $query = "INSERT INTO `documents` VALUES('$username','$file_name')";
		$result = mysqli_query($con,$query) or die(mysqli_error($con));
	    //echo "$file_name";
	    $_SESSION['doc_name']=$file_name;
	    $in_time = date("Y-m-d H:i:s");
	    $query = "INSERT INTO `view_docs` VALUES('$username','$in_time')";
		$result = mysqli_query($con,$query);
		header("Location: document.php");
			

	?>
</body>
</html>