<!DOCTYPE html>
<html>
<head>
  
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;
margin: 0;
    padding: 0;
    height: 100%;
font-size: 100%;
  font-family: "Lato", sans-serif;
background-image:url("images/bg.jpg");
background-size: cover;
}
* {box-sizing: border-box;}

.h{
  background-image: url("images/header.jpg");position:inherit;height:200px;width:100%;background-size: cover;
}

.f{
background-image: url("images/bg02.jpg");position:absolute;width:100%;height:200px;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
.button
{
position:inherit;
border:none;

text-align:center;
text-decoration:none;
display:inline-block;
font-size:13px;
cursor:pointer;

background-repeat:no-repeat;
padding:12px 20px ;

border-radius:4px;
color:white;

}
.button:hover
{ background-color: #444;
}.button1
{
background-color:#4CAF50;
}
.button2
{
background-color:red;

}
</style>
<SCRIPT type="text/javascript">
    window.history.forward();
    function noBack() { window.history.forward(); }
</SCRIPT>
</head>
<body oncontextmenu="return false;">
<header class="h"  style="border-radius:15px;"><br><br>
	<center>
<h1><b><i style="color:white;cursor:default;font-size:2vw;">Exam Section</i></b></h1></center>

</header><!-- /header -->
<center>
<h3 style="background-color: #111;color: white;font-size:1vw;">Contact Form</h3>
</center>
<div class="container">
  <form action="/action_page.php">
    <label for="fname"> Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">


 <label for="fname"> Email</label>
    <input type="text" id="fname" name="firstname" placeholder="email id..">


     <label for="fname"> Subject</label>
    <input type="text" id="fname" name="firstname" placeholder="subject..">


    <label for="subject">Message</label>
    <textarea id="subject" name="subject" placeholder="message.." style="height:200px"></textarea>

    <input type="button" class="button button1" value="Submit" >
  </form>
</div><br>
<center>
<button class="button button2" onclick="location.href='Page1.php'">Exit</button></center><br>
<footer class="f"  style="border-radius:30px;">
	<br><br><br><center><h3 style="color: white;font-size:1vw;">@All rights Reserved &nbsp;&nbsp;&nbsp;Powered by GitamStudents</h3></center>

</footer>
</body>
</html>
