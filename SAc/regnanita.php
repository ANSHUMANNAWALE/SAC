<html>
<head>
<link rel="stylesheet" type="text/css" href="mystyle.css">

<script language="javascript" type="text/javascript">
function chk(){
a = document.getElementById("c1").checked;
if(a==true)
document.getElementById("b1").disabled=false;
else
document.getElementById("b1").disabled=true;
}

function count(){
document.getElementById("s2").style.color="white";
a=document.getElementById("pass").value.length;
if(a<4){
document.getElementById("s2").innerHTML="VERY WEAK";
}
else if(a<6){
document.getElementById("s2").innerHTML="WEAK";
}
else if(a>=6){
document.getElementById("s2").innerHTML="STRONG";
}
if(a==0){
document.getElementById("s2").innerHTML="PAssword Too Short..";
}
}
function validate(){
unm = document.getElementById("unm").value;
if(unm==""){
document.getElementById("s1").innerHTML =  "Username Is Required..";
document.getElementById("s1").style.color="white";
return false;
}

pass = document.getElementById("pass").value;

if(pass.length<6){
document.getElementById("s2").innerHTML =  "Password Too Short..";
document.getElementById("s2").style.color="white";
return false;
}

rpass=document.getElementById("rpass").value;
if(pass!=rpass){
document.getElementById("s3").innerHTML =  "Password Not Matched..";
document.getElementById("s3").style.color="white";
return false;
}

g1 = document.getElementById("g1").checked;
g2 = document.getElementById("g2").checked;

if(g1==false && g2==false){
document.getElementById("s4").innerHTML =  "PLZ..Select A Gender";
document.getElementById("s4").style.color="white";
return false;
}
contact = document.getElementById("contact").value;
if(contact.length!=10){
document.getElementById("s5").innerHTML =  "Invalid Contact No..";
document.getElementById("s5").style.color="white";
return false;
}
if(isNaN(contact)){
document.getElementById("s5").innerHTML =  "Char Not Allowed..";
document.getElementById("s5").style.color="white";
return false;
}

ch = contact.charAt(0);
if(!(ch==9 || ch==8 || ch==7)){
document.getElementById("s5").innerHTML =  "Invalid Series..";
document.getElementById("s5").style.color="white";
return false;
}

email = document.getElementById("email").value;
atpos = email.indexOf('@');
dtpos = email.lastIndexOf('.');
if(atpos==-1 || dtpos==-1){
	document.getElementById("s6").innerHTML =  "Invalid EMAIL ID";
document.getElementById("s6").style.color="white";
return false;
	}
len = email.length;
diff = len - dtpos;
	--diff;
	if(diff>3 || diff<2){
		document.getElementById("s6").innerHTML =  "Invalid EMAIL ID";
document.getElementById("s6").style.color="white";
return false;
		}
	diff2 = dtpos - atpos;
	--diff2;
	if(diff2<1){
		document.getElementById("s6").innerHTML =  "Invalid DOMAIN";
document.getElementById("s6").style.color="white";
return false;
		}	
return true;
}
</script>
</head>
<body>
<form action="addrecord.php" method="post">
<p style="font-size:30px;color:white;text-align:center"><b>CLUB-NAME : </b>
<input type="text" id="unm" size=50 style="height:40px" name="name">
<span id="s1"></span>
<br>
<p style="font-size:30px;color:white;text-align:center"><b>PASSWORD : </b> <input onkeyUp="count()" name="pass" type="password" id="pass" size=50 style="height:40px">
<span id="s2"></span><br>
<p style="font-size:30px;color:white;text-align:center"><b>RE-PASSWORD : </b>
<input type="password" name="pass" id="rpass" size=50 style="height:40px">
<span id="s3"></span><br>

<p style="font-size:30px;color:white;text-align:center"><b>E-MAIL : </b> 
<input type="text" id="email" name="email" size=50 style="height:40px">
<span id="s6"></span><br>
<p style="text-align:center;"><input type="checkbox" id="c1" size=50 onClick="chk()"></p><p style="font-size:25px;background-color:yellowgreen;color:white;text-align:center" >I AGree The Terms & Policies..(click above checkbox) </p><br>
<p style="text-align:center;"><input disabled type="submit" name="submit" value="REGISTER" id="b1" onClick="return validate()" style="font-size:45px;background-color:yellowgreen;color:white" value="sign-up" ></p>
</form>
</body>
</html>