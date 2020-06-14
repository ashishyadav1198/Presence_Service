<?php
session_start();
// Destroying All Sessions
require("db.php");
$username = $_SESSION['username'];
$query = "DELETE FROM `view_docs` WHERE username='$username'";
$result = mysqli_query($con,$query);

if(session_destroy())
{
// Redirecting To Home Page
header("Location: login.php");
}
?> 