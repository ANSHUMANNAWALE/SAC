<?php

include("conn.php");

// Create table
$sql="CREATE TABLE available(hall CHAR(30),status CHAR(30))";

// Execute query
if (mysqli_query($con,$sql))
  {
  echo "Table available created successfully";
  }
else
  {
  echo "Error creating table: " . mysqli_error($con);
  }

   mysqli_query($con,"INSERT INTO available VALUES ('A', 'yes')");

   mysqli_query($con,"INSERT INTO available VALUES ('B', 'yes')");

   mysqli_query($con,"INSERT INTO available VALUES ('C', 'yes')");

   mysqli_query($con,"INSERT INTO available VALUES ('D', 'yes')");

   mysqli_query($con,"INSERT INTO available VALUES ('E', 'yes')");

   mysqli_query($con,"INSERT INTO available VALUES ('F', 'yes')");

   mysqli_query($con,"INSERT INTO available VALUES ('G', 'yes')");

   mysqli_query($con,"INSERT INTO available VALUES ('H', 'yes')");

?>
