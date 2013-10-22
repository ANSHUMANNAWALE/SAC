<?php
include("conn.php");
$name = $_REQUEST["name"];
$one = $_REQUEST["one"];
$date = date("y/m/d");
$hall = $_REQUEST["hall"];

mysql_query("insert into entry values('$name','$date',$one,'$hall')");


$q = mysql_affected_rows($con);
if($q>0){
	header('Location: form.php?m=Record Inserted.');
	mysql_query("update room set status='no' where name = '$hall'");
	}
?>