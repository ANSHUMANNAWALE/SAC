<?php
include("conn.php");
if(isset($_POST['submit']))
{
echo "submitted";
$name = $_POST["name"];
$pass = $_POST["pass"];
$r = mysql_query("select * from regtable where name = '$name' and pass = '$pass'")or die (mysql_error());
echo mysql_num_rows($r);
if($r>0)
{
	header('location:mainpage.php?m=correct!!');}
else{
	header('location:form.php?m=Invalid username/password');}
}
?>