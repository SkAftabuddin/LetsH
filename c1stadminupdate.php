<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<SCRIPT type="text/javascript">
    window.history.forward();
    function noBack() { window.history.forward(); }
</SCRIPT>
<head>
<style>
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
.button1{background-color:MediumSeaGreen;padding: 14px 40px;border-radius:8px;width:100%;color:white;}
.button2{background-color:red;padding: 14px 40px;border-radius:12px;color:white}
.button3{background-color:purple;padding: 15px 45px;border-radius:12px;color:powderblue;}
.button4{background-color:green; padding:14px 40px;border-radius:12px;color:white;s }
</style>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Admin update Panel</title>
</head>
<body>
<header style="background-color: powderblue; border-radius:15px;">
<center><br><br>
<h1><b><i style="color:white;">Online Examination Management System</i></b></h1></center><br>
</header>
<form action="c1stadminupdate.php" name="f1" method=post>
<br><br><br><br>
<center>


<hr><h3 style="background-color: purple;color: white;">Update panel</h3><hr><BR>



 <table style="border=1" cellpadding="5" cellspacing="5">
<tr><td><input type="button" class="button button1" value="Update Student Sitting Arrangment"  ><br>
<input type="button" class="button button1" value="Update Question Bank " onclick="location.href='c1stupdatequestion.php'" ><br>
<input type="button" class="button button1" value="Update Schedule"><br>
</td>
</tr>
</table>
<table style="border=1" cellpadding="5" cellspacing="5">
<tr ><td><input type="button" class="button button4" value="Reset Record" ></td>
<td><input type="button" class="button button2" value="Exit" onclick="location.href='c1stadminhomepage.php' "  ></td>
<td><input type="button" class="button button2" value="Logout" onclick="location.href='Page1.php' "  ></td></tr>

</td>
</tr>
</table>
<br>
<br></center>
</form><br>
<br>
<footer style="background-color: powderblue;" >
<MARQUEE style="color: black; background-color: red;">NOTICES:</MARQUEE><br>
<br><center><h4 style="color: maroon;">@All rights Reserved &nbsp;&nbsp;&nbsp;Powered by GitamStudents</h4></center>

</footer>
</body>
</html>