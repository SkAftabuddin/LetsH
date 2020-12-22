<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<SCRIPT type="text/javascript">
    window.history.forward();
    function noBack() { window.history.forward(); }
</SCRIPT>
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
	background-image: url("images/header.jpg");position:inherit;background-size: cover;height: 200px;opacity: 0.9;
}
.f
{
	background-image: url("images/bg02.jpg");position: absolute;width: 100%;height: 200px;opacity: 0.9;
}
.c
{
  border-radius: 12px;
  height:15px;width:15px;
}

.button
{

border:none;
text-align:center;
text-decoration:none;
display:inline-block;
font-size:16px;
margin:4px 2px;
cursor:pointer;opacity: 0.9;
}
.button1{background-color:mediumseagreen;padding: 14px 40px;border-radius:12px;width:100%;color:white;}
.button1:hover{
  background-color:#111;}
.button2{background-color:red;padding: 14px 40px;border-radius:12px;color:white}
.button2:hover{
  background-color:#111;}
.button3{background-color:dodgerblue;padding: 14px 40px;border-radius:12px;color:white;width:80%;}
.button3:hover{
  background-color:purple;}
.button4{background-color:green; padding:14px 40px;border-radius:12px;color:white;s }
.button4:hover{
  background-color:#111;}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Admin update Panel</title>
</head>
<body oncontextmenu="return false;">
<header class="h" style=" border-radius:15px;"><br>
	<div class="logo">
        <img src="images/do.jpg">
      </div>
<center><br><br>
<h1><b><i style="color:white;">Exam Section</i></b></h1></center><br>
</header>
<form action="c4thadminupdate.php" name="f1" method=post><br>
<center>
<h3 style="background-color:#444;color: white;opacity: 0.8;">Update Panel </h3></center><hr>
<br><center>
<br>
<table style="border=1" cellpadding="5" cellspacing="5">
<tr><td><input type="checkbox" class="c">&nbsp;<input type="button" class="button button3" value="Update Student Sitting Arrangment" onclick="location.href='c4thsittingarrang.php'" ><br>
<input type="checkbox" class="c">&nbsp;<input type="button" class="button button3" value="Update Question Bank " onclick="location.href='c4thupdatequestion.php'" ><br>
<input type="checkbox" class="c">&nbsp;<input type="button" class="button button3" value="Update Schedule" onclick="location.href='updatesched.php'"><br>
</td>
</tr>
</table><hr>
<table style="border=1" cellpadding="5" cellspacing="5">
<tr ><td><input type="button" class="button button4" value="Reset Record" ></td>

<td><input type="button" class="button button2" value="Logout" onclick="location.href='Page1.php' "  ></td><

<td><input type="button" class="button button4" value="< Previous Page" onclick="location.href='c4thadminhomepage.php' "  ></td></tr>
</table>
<br>
<br></center>
</form><br>
<br>
<footer class="f" style="border-radius: 15px;" >
<MARQUEE style="color: black; background-color: red;"><b>NOTICES</b>:</MARQUEE><br>
<br><center><h4 style="color:white;">@All rights Reserved &nbsp;&nbsp;&nbsp;Powered by GitamStudents</h4></center>

</footer>
</body>
</html>