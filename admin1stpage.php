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
	.h{
background-image: url("images/header.jpg");background-size: cover;height: 200px;opacity:0.9;
	}
	.f{
		background-image: url("images/bg02.jpg");position: absolute;width: 100%;height: 200px;opacity: 0.9;
	}
.button
{
background-color:MediumSeaGreen;
border:none;
text-align:center;
text-decoration:none;
display:inline-block;
font=size:16px;
margin:4px 2px;
cursor:pointer;padding: 14px 40px;
border-radius:8px;
color:powderblue;
}
.button:hover{
  background-color: #111;}
.button1{background-color:Green;color:white;
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
<title>Admin 1st page</title>
</head>
<body>
<form action="admin1stpage.php" method="post">
<header class="h" style="border-radius:15px;">
	<br>
	<div class="logo">
        <img src="images/do.jpg">
      </div>
<center><br><br>
<h1><b><i style="color: white;font-size:2vw;">Exam Section</i></b></h1></center><br>
</header>
<br>
<center><br>
	<h3 style="background-color:#444;color: white;opacity: 0.8;">Choose Branch</h3><hr>
	<br><h4><i style="color:purple;">B.tech</i></h4>
<table style="border=1" width="50%"  cellpadding="5" cellspacing="5">
	<tr style="background-color: purple;opacity: 0.7;" >
		<th style="border-radius: 15px;color: white;">CSE<br>
	    <i style="color:white;">Admin ID</i>&nbsp;&nbsp;<input text="text">&nbsp;&nbsp;
	    <input type="button" class="button button1" value="Submit" onclick="location.href='adminCSEpage.php'"></th>
	</tr>
	<tr style="background-color: purple;opacity: 0.7;"><th style="border-radius: 15px;color: white;">CIVIL<br>
		<i style="color:white;">Admin ID</i>&nbsp;&nbsp;<input text="text">&nbsp;&nbsp;
		<input type="button" class="button button1" value="Submit" onclick="location.href='adminCIVILpage.php'">
	    </th>
    </tr>
	<tr style="background-color: purple;opacity: 0.7;"><th style="border-radius: 15px;color: white;">EEE<br>
    	<i style="color:white;">Admin ID</i>&nbsp;&nbsp;<input text="text">&nbsp;&nbsp;
    	<input type="button" class="button button1" value="Submit" onclick="location.href='adminEEEpage.php'">
        </th>
    </tr>
    <tr style="background-color: purple;opacity: 0.7;" ><th style="border-radius: 15px;color: white;">MECH<br>
	    <i style="color:white;">Admin ID</i>&nbsp;&nbsp;<input text="text">&nbsp;&nbsp;
	    <input type="button" class="button button1" value="Submit" onclick="location.href='adminMECHpage.php'">
	    </th>
	</tr>
</table><br><hr><br>
<table style="border=1" width="50%"  cellpadding="5" cellspacing="5">
	<tr style="background-color:mediumseagreen;opacity: 0.7;" ><th style="border-radius: 15px;">Main Administration<br>
	    <i style="color:white;">Main Admin ID</i>&nbsp;&nbsp;<input text="text">&nbsp;&nbsp;<input type="button" class="button button1" value="Submit" onclick="location.href='adminhomepage.php'"></th></tr>
</table>		




	</center>
<br><center>
<input type="button" class="button button2" value="Logout" onclick="location.href='Page1.php'"><br><br></center>
</form>
<br><br>
<footer class="f" style="border-radius: 15px;" >
<MARQUEE style="color: white; background-color: red;"><b>NOTICES:</b></MARQUEE><br>
<br>
<center>
<h4 style="color:white;">@All rights Reserved &nbsp;&nbsp;&nbsp;Powered by GitamStudents</h4></center>
</footer>
</body>
</html>
