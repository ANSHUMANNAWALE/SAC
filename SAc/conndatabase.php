<?php
$con = mysql_connect("localhost","root","");
if(!isset($con)){
	die("Connection Failed..");
	}
	$sql="CREATE DATABASE studapp";
if (mysqli_query($con,$sql))
  {
  echo "Database my_db created successfully";
  }
else
  {
  echo "Error creating database: " . mysqli_error($con);
  }

?>