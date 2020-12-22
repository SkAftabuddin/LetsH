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

border:none;
text-align:center;
text-decoration:none;
display:inline-block;
font-size:16px;
margin:4px 2px;
cursor:pointer;
}
.button:hover{
  background-color: #111;}
.button1{background-color:mediumseagreen;padding: 14px 40px;border-radius:8px;width:100%;color:white;}
.button2{background-color:red;padding: 14px 40px;border-radius:12px;color:white}
.button3{background-color:purple;padding: 15px 45px;border-radius:12px;color:powderblue;}
.button4{background-color:green; padding:14px 40px;border-radius:12px;color:white;s }
</style>
<SCRIPT type="text/javascript">
    window.history.forward();
    function noBack() { window.history.forward(); }
</SCRIPT>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Admin update Panel</title>
</head>
<body oncontextmenu="return false;">
<header style=" border-radius:15px;" class="h">
<center><br><br>
<h1><b><i style="color:white;">Online Examination Management System</i></b></h1></center><br>
</header>
<form action="adminupdate.php" name="f1" method=post>
<br><br><br><br>
<center>


<BR><h3 style="background-color:#444;color: white;opacity: 0.8;">Update Panel </h3><hr><BR>



<input type="button" class="button3" value="Update Software" onclick="location.href='softwareupdate.php'" ><br><hr><br>
<input type="button" class="button button4" value="< Previous page" onclick="location.href='adminhomepage.php' "  >
<input type="button" class="button button2" value="Logout" onclick="location.href='Page1.php' "  >
<br><br>
<br></center>
</form><br>
<br>
<footer style="border-radius: 15px;" class="f">
<MARQUEE style="color: black; background-color: red;">NOTICES:</MARQUEE><br>
<br><center><h4 style="color: white;">@All rights Reserved &nbsp;&nbsp;&nbsp;Powered by GitamStudents</h4></center>

</footer>
</body>
</html>