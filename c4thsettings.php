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
	background-image: url("images/header.jpg");position:inherit;background-size: cover;height: 200px;opacity: 0.9;
}
.f
{
	background-image: url("images/bg02.jpg");position: absolute;width: 100%;height: 200px;opacity: 0.9;
}
.button
{
border:none;
text-align:center;
text-decoration:none;
display:inline-block;
font-size:16px;
margin:4px 2px;
cursor:pointer;
border-radius:8px;
}
.button1
{background-color:dodgerblue;padding: 14px 40px;
width:100%;color:white;}
.button1:hover{
  background-color:purple;}

.button2
{background-color:red;
color:white;padding: 11px 32px;
}
.button2:hover{
  background-color:#111;}
</style>
<SCRIPT type="text/javascript">

window.history.forward();
function noBack() { window.history.forward(); }
</SCRIPT>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Admin Settings</title>
</head>
<body oncontextmenu="return false;">
<header class="h" style="border-radius:15px;opacity: 0.9;">
	<br><div class="logo">
        <img src="images/do.jpg">
      </div>
<center><br><br>
<h1><b><i style="color: white;opacity: 0.9;">Exam Section</i></b></h1></center><br>
</header><br>
<form action="c4thsettings.php" method=post>

<center>
<BR><h3 style="background-color:#444;color: white;">Settings</h3><hr><BR></center>
<center>
<table style="border=1"  cellpadding="5" cellspacing="5">
<tr ><td>
<input type="button" class="button button1" value="Set New Student Database"><br>

</td></tr>
</table><br><br><hr><br>
<table style="border=1"  cellpadding="5" cellspacing="5"><tr >
<td>
<input type="button" class="button button2" value="Logout" onclick="location.href='Page1.php'">&nbsp;&nbsp;
<input type="button" class="button button2" value="Exit" onclick="location.href='c4thadminhomepage.php'">
</td></tr>
</table><br><br>
</center>
 </form>
 <br>
<footer class="f" style="border-radius: 8px;opacity: 0.9;" >
<MARQUEE style="color: white; background-color: red;"><b>NOTICES:</b></MARQUEE><br>
<br><center><h4 style="color:white;">@All rights Reserved &nbsp;&nbsp;&nbsp;Powered by GitamStudents</h4></center>

</footer>
</body>
</html>