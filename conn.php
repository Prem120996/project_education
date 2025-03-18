<?php
error_reporting("E_ALL");

date_default_timezone_set("Asia/Kolkata");
$servername = "localhost";
$username = "root";
$password = "";
// Create connection
$con = mysqli_connect($servername, $username, $password);
// Check connection
if (!$con) 
{
  die("Connection failed: " . mysqli_connect_error());
}
mysqli_select_db($con,'project2');
// echo "Connected successfully";
?>