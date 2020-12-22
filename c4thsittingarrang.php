<!DOCTYPE html>
<html lang="en">

<head>
  <style>
  .body { margin: 0;
    padding: 0;
    height: 100%;
font-size: 100%;
  font-family: "Lato", sans-serif;
background-image:url("images/bg.jpg");
background-size: cover;
}

 .body::after
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
.input{
  color:white;border-radius: 8px;background-color: #111;opacity: 0.8;
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
border-radius:8px;opacity: 0.9;
}
.button1
{background-color:green;padding: 11px 32px;
color:white;}
.button1:hover{
  background-color:#444;}

.button2
{background-color:red;
color:white;padding: 11px 32px;
}
.button2:hover{
  background-color:#111;}
  .table
  {
border:1;background-color: grey;color:white;font-size:1vw;opacity: 0.8;
  }
</style>
<SCRIPT type="text/javascript">

window.history.forward();
function noBack() { window.history.forward(); }
</SCRIPT>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title></title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  

</head>

<body oncontextmenu="return false;" class="body">
<header class="h" style="border-radius:15px;">
  <br><div class="logo">
        <img src="images/do.jpg">
      </div>
<center>
  <br><br>
<h1><b><i style="color: white;font-size:2vw;">Exam Section</i></b></h1></center><br>
</header>

<br>
<center>
<h3 style="background-color:#444;color: white;opacity: 0.8;">CSE Admin Sitting Arrangement Panel </h3></center><hr>
<br><b style="font-size: 1vw;color: white;">Upload the schedule or create one:</b>
<br><center><input type="file" name="" value="Upload" style="font-size: 1vw;">&nbsp;&nbsp;
  <input type="submit" class="button button1" value="Ok" onclick="location.href='c4thsittingarrangNext.php'"> <br><br><b style="font-size: 1vw;color: white;">OR</b><br>
<table style="border:4;align-content: center;border-radius: 8px;" width="20%" cellpadding="8" cellspacing="8">
<td style="background-color: grey;color:white;opacity: 0.8;font-size:1vw;"><br>Choose no. of candidates per bench&nbsp;&nbsp;&nbsp;<br>&nbsp;&nbsp;&nbsp;
  <input class="input" type="number" min="0" max="4"><br>
<br>Choose Hall number&nbsp;&nbsp;&nbsp;<br>&nbsp;&nbsp;&nbsp;
  <input class="input" type="number" steps="4" min="0" ><br>
  <br>Choose no. of rows per hall&nbsp;&nbsp;&nbsp;<br>&nbsp;&nbsp;&nbsp;
  <input class="input" type="number" min="0" max="9"><br>
  <br>Choose no. of columns per hall&nbsp;&nbsp;&nbsp;<br>&nbsp;&nbsp;&nbsp;
  <input class="input" type="number" min="0" max="9"><br>
  <br>Write starting 6 digit registration number&nbsp;&nbsp;&nbsp;<br>&nbsp;&nbsp;&nbsp;
  <input class="input" type="text" min="0" maxlength="6"><br><br>
</td><br><br>
</table></center>
<br><hr><br><center>
<table class="table" cellpadding=8 cellspacing=8 >
 <tr>
   <input type="submit" class="button button1" value="Submit" onclick="location.href='c4thsittingarrangNext.php'">&nbsp;&nbsp;<input type="reset" class="button button2" value="Reset">&nbsp;&nbsp;<input type="button" class="button button1" value="Back" onclick="location.href='c4thadminupdate.php'">
 </tr> </table>



</center>
<br><br><br><br><br>
<footer class="f" style="border-radius:15px;" >
<MARQUEE style="color: white; background-color: red;font-size:1vw;"><b>NOTICES</b></MARQUEE><br>
<br>
<center>
<h4 style="color:white;font-size:1vw;">@All rights Reserved &nbsp;&nbsp;&nbsp;Powered by GitamStudents</h4></center>
</footer>
</body>
</html>