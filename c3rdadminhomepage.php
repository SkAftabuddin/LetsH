<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
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
border-radius:8px;

}
.button1
{background-color:MediumSeaGreen;padding: 14px 40px;
width:100%;color:white;
}
.button2
{
background-color:red;padding: 11px 32px;
color:white;
}
</style>
<SCRIPT type="text/javascript">

window.history.forward();
function noBack() { window.history.forward(); }
</SCRIPT>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Admin Panel</title>
</head>
<body>
<header style="background-color: powderblue; border-radius:15px;">
<center><br><br>
<h1><b><i style="color: white;">Online Examination Management System</i></b></h1></center><br>
</header>
<form action="c3rdadminhomepage.php" method="post">
<br>
<hr><center>
<h3 style="background-color: purple;color: white;">Administrator 3rd year CSE Homepage</h3></center><hr>
<br><center>
<table style="border=1"  cellpadding="5" cellspacing="5">
<tr>
<td><input type="button" class="button button1" value="Update" onclick="location.href='c3rdadminupdate.php'"><br>

<input type="button" class="button button1" value="Settings" onclick="location.href='c3rdsettings.php'"><br>
<input type="button" class="button button1" value="Publish Result" onclick="location.href='c3rdupdateresult.php'"></td>
<br>
</tr>
</table><br>
<br>
<input type="button" class="button button2" value="Logout" onclick="location.href='Page1.php'">
</center><br>
</form>
<footer style="background-color: powderblue;" >
<MARQUEE style="color: white; background-color: red;"><b>NOTICES</b></MARQUEE><br>
<br>
<center>
<h4 style="color: maroon;">@All rights Reserved &nbsp;&nbsp;&nbsp;Powered by GitamStudents</h4></center>
</footer>
</body>
</html>