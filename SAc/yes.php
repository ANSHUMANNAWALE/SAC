
<!DOCTYPE html>
<html>
<head>
<link rel = "stylesheet" type = "text/css" href = "mystyle.css">


</head>
<body>

<form action="form.htm" method="post">
<p style="text-align:right;"><input type="submit" style="font-size:20px;background-color:darkolivegreen;color:white" value="Logout" ></p>
</form>



<form method="post" action="done.php">
<br><br><br><br><br><br><br><br><br>
<p style="text-align:center;color:white;font-size:40px"><b>Event : </b><input type="text" name = "name" size=40 style="font-size:20px;height:40px"></p>
<p style="text-align:center;color:white;font-size:40px"><b>Hall No : </b><input type="text" name = "hall" size=4 style="font-size:20px;height:40px"></p>

<p style="text-align:center;color:white;font-size:40px"><b>Days : </b>
<br>
<input type="radio" name = "one" value = "1" height:60px>1
<br>
<input type="radio" name = "one" value = "2" size = 30>2
<br>
<input type="radio" name = "one" value = "3" size = 30>3
<br>
<input type="radio" name = "one" value = "4" size = 30>4


<br><br>
<input type = "submit" value="Done" style="font-size:40px;background-color:yellowgreen;color:white"> 
</form>
</body>
</html>
