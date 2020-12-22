<!DOCTYPE html>
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
border-radius:12px;
opacity: 0.9;
}
.button1{
padding: 11px 32px;color:white;background-color:green;
}
.button1:hover
{
background-color: #444;
}
.button2
{
padding: 11px 32px;color:white;background-color:red;
}
.button2:hover
{
background-color: #444;
}
</style>
<SCRIPT type="text/javascript">

window.history.forward();
function noBack() { window.history.forward();
 }
</SCRIPT>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Question bank</title>
</head>

<body oncontextmenu="return false;">
<header class="h" style="border-radius: 15px;opacity: 0.9;"><br>
	<div class="logo">
        <img src="images/do.jpg">
      </div>
<center><br><br>
<h1><b><i style="color: white;font-size:2vw;">Exam Section</i></b></h1></center><br>
</header>
<form action="c4thupdatequestion.php" method=post>
<br><center>

<h3 style="background-color: #444;color: white;">
Update Question Bank</h3><br><hr>
<table style="border=1" width="50%" cellpadding="5" cellspacing="5">
<tr style="background-color: Green;color: black;">
<th>SI.No</th>
<th>Last year semester questions bank</th>
<th>Last year internal questions bank</th>
<th>Latest question bank</th> </tr>
<tr style="background-color: MediumSeaGreen;color: white;">
<td>1</td>
<td><input type="file" name="File1a"></td>
<td><input type="file" name="File1b"></td>
<td><input type="file" name="File1c"></td>
</tr>
<tr style="background-color: MediumSeaGreen;color: white;">
<td>2</td>
<td><input type="file" name="File2a"></td>
<td><input type="file" name="File2b"></td>
<td><input type="file" name="File2c"></td>
</tr>
<tr style="background-color: MediumSeaGreen;color: white;">
<td>3</td>
<td><input type="file" name="File3a"></td>
<td><input type="file" name="File3b"></td>
<td><input type="file" name="File3c"></td>
</tr>
<tr style="background-color: MediumSeaGreen;color: white;">
<td>4</td>
<td><input type="file" name="File4a"></td>
<td><input type="file" name="File4b"></td>
<td><input type="file" name="File4c"></td>
</tr>
</table><br><input type="button" class="button button1" value="Submit"></center><br><hr><br>
<center>
<input type="button" class="button button2" value="Exit" onclick="location.href='c4thadminupdate.php'">
</center>
 </form>
 <br><br>
 <footer class="f" style="border-radius: 15px;opacity: 0.9;" >
<MARQUEE style="color: white; background-color: red;"><b>NOTICES</b>:</MARQUEE><br>
<br><center><h4 style="color: white;font-size:2vw;">@All rights Reserved &nbsp;&nbsp;&nbsp;Powered by GitamStudents</h4></center>

</footer>
</body>
</html>