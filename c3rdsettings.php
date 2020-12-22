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
{
background-color:Green;
color:white;padding: 11px 32px;}
.button2
{background-color:red;
color:white;padding: 11px 32px;
}
.button3
{background-color:MediumSeaGreen;
padding: 14px 40px;color:white;width:"100%";
}
</style>
<SCRIPT type="text/javascript">

window.history.forward();
function noBack() { window.history.forward(); }
</SCRIPT>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Admin Settings</title>
</head>
<body>
<header style="background-color: powderblue;border-radius:15px;">
<center><br><br>
<h1><b><i style="color: white;">Online Examination Management System</i></b></h1></center><br>
</header><br>
<form action="c3rdsettings.php" method=post>

<center>
<BR><hr><h3 style="background-color: purple;color: white;">Settings</h3><hr><BR></center>
<center>
<table style="border=1"  cellpadding="5" cellspacing="5">
<tr ><td>
<input type="button" class="button button3" value="Set New Student Database"><br>
<input type="button" class="button button3" value="Set New Schedule              "><br>
</td></tr>
</table><br>
<table style="border=1"  cellpadding="5" cellspacing="5"><tr >
<td>
<input type="button" class="button button2" value="Logout" onclick="location.href='Page1.php'">&nbsp;&nbsp;
<input type="button" class="button button2" value="Exit" onclick="location.href='c3rdadminhomepage.php'">
</td></tr>
</table>
</center>
 </form>
 <br>
<footer style="background-color: powderblue;" >
<MARQUEE style="color: black; background-color: red;"><b>NOTICES:</b></MARQUEE><br>
<br><center><h4 style="color: maroon;">@All rights Reserved &nbsp;&nbsp;&nbsp;Powered by GitamStudents</h4></center>

</footer>
</body>
</html>