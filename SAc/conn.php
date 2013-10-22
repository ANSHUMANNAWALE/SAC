<?php
$con = mysql_connect("localhost","root","");
if(!isset($con)){
	die("Connection Failed..");
	}
	mysql_select_db("studapp",$con);
?>