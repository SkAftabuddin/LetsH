<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<style>

	body { margin: 0;
    padding: 0;
    height: 100%;
font-size: 100%;
  font-family: "Lato", sans-serif;
background-image:url("images/bg.jpg");
background-size: cover;
}

 body::after
 {
height: 200px;
 }
 .logo img{
   float: left;
   width: 150px;
   height: auto;
   margin: 20px;
}
.h
{
	background-image: url("images/header.jpg");background-size: cover;height: 200px;opacity: 0.9;
}
.f
{
	background-image: url("images/bg02.jpg");position: absolute;bottom: 0;width: 100%;height: 200px;opacity: 0.9;
}
.o
{
	size: 14px;color: white;border-radius: 15px;background-color: purple;font-size:16px;opacity: 0.9;
}
.button
{

border:none;
text-align:center;
text-decoration:none;
display:inline-block;
font=size:16px;
margin:4px 2px;
cursor:pointer;padding: 14px 40px;
border-radius:8px;
opacity: 0.9;
}

.button2
{background-color:red;color:white;
}
.button2:hover{
  background-color:#111;}
</style>
<SCRIPT type="text/javascript">

window.history.forward();
function noBack() { window.history.forward(); }
</SCRIPT>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Admin MECH page</title>
</head>
<body oncontextmenu="return false;">
<form action="adminMECHpage.php" method="post">
<header class="h" style=" border-radius:15px;">
	<br>
	<br><div class="logo">
        <img src="images/do.jpg">
      </div>
<center><br><br>
<h1><b><i style="color: white;">Exam Section</i></b></h1></center><br>
</header>
<br>
<center><br>
	
	<h3 style="background-color: #444;color:white;">Mechanical Engineering</h3>
	<hr>
	<br>
	<table style="border=1" width="50%"  cellpadding="5" cellspacing="5">
			<tr><i style="color:white;">Choose Year</i></tr>
		<tr >
		     <th style="border-radius: 15px;"><select id="box" class="o"  onchange="location=this.value">
		     	<
			<option  style="color:white;background-color: grey">--------------Year------------</option>
			<option value="m1stadminhomepage.php">1st year</option>
			<option value="m2ndadminhomepage.php">2nd year</option>
			<option value="m3rdadminhomepage.php">3rd year</option>
			<option value="m4thadminhomepage.php">4th year</option></select>
        </th></tr></table><br><br><br><br>
</center>
<br><hr><center>
<input type="button" class="button button2" value="Logout" onclick="location.href='Page1.php'"><br><br></center>
</form>
<br><br>
<footer class="f" style="border-radius: 8px;" >
<MARQUEE style="color: white; background-color: red;"><b>NOTICES:</b></MARQUEE><br>
<br>
<center>
<h4 style="color: white;">@All rights Reserved &nbsp;&nbsp;&nbsp;Powered by GitamStudents</h4></center>
</footer>
</body>
</html>