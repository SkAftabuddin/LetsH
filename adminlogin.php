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
.input
{
	color:white;
	opacity:1;
	border-radius: 8px;background-color: black;font-weight: bold;
}
	.h
	{
background-image: url("images/header.jpg");position:inherit;background-size: cover;height: 200px;width: 100%;opacity: 0.9;
	}
	.f{
		background-image: url("images/bg02.jpg");position:absolute;width: 100%;height: 200px;opacity: 0.9;
	}
.button
{
border:none;
text-align:center;
text-decoration:none;
display:inline-block;
font-size:16px;
margin:4px 2px;
cursor:pointer;padding: 14px 30px;
border-radius:8px;

}
.button:hover{
  background-color: #111;}
.button1
{background-color:green;color:white;
}
.button2
{background-color:red;color:white;
}
</style>
<SCRIPT type="text/javascript">

window.history.forward();
function noBack() { window.history.forward(); }
</SCRIPT>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Admin Login</title>
</head>
<body oncontextmenu="return false;">
<form name="f1" method="post" action="adminlogin.jsp">

<header class="h" style="border-radius:15px;"><br><br><div class="logo">
        <img src="images/do.jpg">
      </div>
<center>

	<br><br>
<h1><b><i style="color: white;font-size:2vw;">Exam Section</i></b></h1></center><br><br>
</header>
<br><center>
<BR><h3 style="background-color:#444;color: white;opacity: 0.8;">Admin Login</h3><hr><BR></center><BR><center>
<table style="border=1"  cellpadding="5" cellspacing="5">
<tr style="background-color: purple;opacity: 0.7;">
<td style="color: white;border-radius: 10px;">USER ID &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="t1" class="input" size=25 maxlength=35></td>
</tr>
<tr style="background-color: purple;opacity: 0.7;">
<td  style="color: white;border-radius: 10px;">PASSWORD &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="t2" class="input"  size=25 maxlength=25 id="myInput"></td>
</tr>
<tr style="background-color:mediumseagreen;opacity: 0.7;">
<td ><input type="checkbox" onclick="myFunction()"><b><i style="color:black;">Show Password</i></b></td>
</tr>
<tr>
<td> 
<input type="button" class="button button1" value="Submit" name="b1" value="Login" onclick="location.href='admin1stpage.php'">
</td>
</tr>
</TABLE><br><hr>
<br>
<input type="button" class="button button2" value="Exit" onclick="location.href='Page1.php'">
</CENTER>
<script type="text/javascript">
function myFunction() {
	  var x = document.getElementById("myInput");
	  if (x.type === "password") {
	    x.type = "text";
	  } else {
	    x.type = "password";
	  }
	}
</script>
</form>





<br><br>
<footer class="f" style="border-radius: 15px;" >
<MARQUEE style="color: white; background-color: red;"><b>NOTICES:</b></MARQUEE><br>
<br><center><h4 style="color:white;font-size:1vw;">@All rights Reserved &nbsp;&nbsp;&nbsp;Powered by GitamStudents</h4></center>

</footer>
</body>
</html>