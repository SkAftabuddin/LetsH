<!DOCTYPE html>
<html>
<head>
<style>

body { margin: 0;
    padding: 0;
    height: 100vh;
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
	margin-top: 10px;
}

.button
{

border:none;
text-align:center;
text-decoration:none;
display:inline-block;
font-size:16px;
margin:4px 2px;
cursor:pointer;padding: 14px 40px;
border-radius:8px;

opacity: 0.9;
}
.button1
{width:100%;
background-color:dodgerblue;
color:white;}
.button1:hover{
  background-color:purple;}
.button2
{background-color:red;
color:white;
}
.button2:hover{
  background-color:#111;}
</style>
<SCRIPT type="text/javascript">

window.history.forward();
function noBack() { window.history.forward(); }
</SCRIPT>
<meta charset="ISO-8859-1">
<title>Student panel</title>
</head>
<body oncontextmenu="return false;">
  <header class="h" style="border-radius:15px;">
<br><div class="logo">
        <img src="images/do.jpg">
      </div>

<center><br><br>
<h1><b><i style="color: white;font-size:2vw;">Exam Section</i></b></h1></center><br>
</header><br>

<form action="studentpanel.php" method="post">
<br>
<center>
<h3 style="background-color:#444;color: white;opacity: 0.8;">Student Panel</h3></center><hr>
<br><center>
<table style="border=1" cellpadding="5" cellspacing="5">
<tr>
<td><input type="button" class="button button1" value="Profile" onclick="location.href='studProfile.php'"><br>
<input type="button" class="button button1" value="Result" onclick="location.href='studentResult.php'"><br>
<input type="button" class="button button1" value="Question Bank" onclick="location.href='studentQuestion.php'"><br>
<input type="button" class="button button1" value="Exam Schedule" ><br>
<input type="button" class="button button1" value="Sitting Arrangement" >

</td>
</tr>

</table>
<hr>
<br>
<input type="button" class="button button2" value="Logout" onclick="location.href='Page1.php'">
</center>
</form>

<br>
<footer class="f" style="border-radius:15px;" >
<MARQUEE style="color: white; background-color: red;"><b>NOTICES:</b></b></MARQUEE><br>
<br><center><h4 style="color:white;font-size:2vw;">@All rights Reserved &nbsp;&nbsp;&nbsp;Powered by GitamStudents</h4></center>
</footer>
</body>
</html>