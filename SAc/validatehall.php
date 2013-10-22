<?php
include("conn.php");
if(isset($_POST['submit']))

{

$name = $_POST["name"];
$q="select status from room where name = '$name'";
$r = mysql_query($q);
$res = mysql_fetch_array($r);

	if($res['status'] == 'yes')
	header('location:yes.php');
	else
	header('location:no.php');
}

?>
