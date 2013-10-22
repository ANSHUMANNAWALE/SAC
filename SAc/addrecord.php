<?php
include("conn.php");
if(isset($_POST['submit']))

{

$name = $_REQUEST["name"];
$pass = $_REQUEST["pass"];
$email = $_REQUEST["email"];
header('Location: mainpage.php');
mysql_query("insert into regtable values('$name','$pass','$email'");
$q = mysql_affected_rows($con);
if($q>0){
	header('Location: mainpage.php?m=Record Inserted.');
	}
}
?>