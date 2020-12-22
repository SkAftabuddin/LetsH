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
	.input
{
	color:white;
	opacity:1;
	border-radius: 8px;background-color: #111;font-weight: bold;
}

.button
{
border:none;
text-align:center;
text-decoration:none;
display:inline-block;
font:size:16px;
margin:4px 2px;
cursor:pointer;padding: 14px 40px;
border-radius:8px;

}
.button:hover{
  background-color: #444;
}
.button1
{background-color:green;color:white;
}
.button2
{background-color:red;color:white;
}
.button3
{background-color:purple;color:white;
}
</style>
<SCRIPT type="text/javascript">
    window.history.forward();
    function noBack() { window.history.forward(); }
</SCRIPT>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Instruction update</title>
</head>
<body oncontextmenu="return false;">
<header style="border-radius:15px;" class="h">
	<br>
	<div class="logo">
        <img src="images/do.jpg">
      </div>
<center><br><br>
<h1><b><i style="color: white;">Exam Section</i></b></h1></center><br><br>
</header>
<form action="instruc.php" name="f1" method=post>
<center><br><br>
<h3 style="background-color:#444;color: white;opacity: 0.8;">Update Instruction here</h3></center><hr><center>
<br>

<table style="border=1" width="50%" cellpadding="5" cellspacing="5">
<tr style="color: purple;">
<td> 
<b>SI No.:</b>

<input type="text" name="t1" value=""  id="txt1" size=3 maxlength=3><BR>
</tr><tr style="color: purple;"><td>
<b>Update Instruction:</b>
<br>
<TEXTAREA name="t2" rows=5 cols=60 Wrap=true class="input"> </TEXTAREA></td>
</tr>


<tr >
<td >
<input type="SUBMIT" class="button button1" value="SUBMIT" name="submit" >
<input type="SUBMIT" class="button button2" value="DELETE"name="submit" >
<input type="SUBMIT" class="button button3" value="UPDATE"name="submit">
<br>

</td>
</tr>

</table>
<hr>
<input type="button" class="button button1" value="< Previous Page" onclick="location.href='settings.php'">




</center>

 </form>
 <footer style="border-radius: 15px;" class="f">
<MARQUEE style="color: white; background-color: red;">NOTICES:</MARQUEE><br>
<br><center><h4 style="color: white;">@All rights Reserved &nbsp;&nbsp;&nbsp;Powered by GitamStudents</h4></center>

</footer>
</body>
</html>