<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<div id="container">
<div id="h"></div>
 <div id="body"></div>
 <div id="f"></div> 
</div>
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

#container
{
  min-height: 100%;
  position: relative;
}

.sidebar {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidebar a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidebar a:hover {
  color: #f1f1f1;
}

.sidebar .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

.openbtn {
  font-size: 20px;
  cursor: pointer;
  background-color: #444;
  color: white;
  padding: 10px 15px;
  border: none;
}

.openbtn:hover {
  background-color: #111;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */


.button
{
position:inherit;
border:none;

text-align:center;
text-decoration:none;
display:inline-block;
font-size:18px;
cursor:pointer;
background-position:10px 10px;
background-repeat:no-repeat;
padding:12px 20px 12px 40px;

}
.button:hover{
  background-color: #444;
}
.button1
{border-radius:8px;
background-color:#111;padding: 14px 32px;
opacity: 0.9;
color:white;}
.button2
{background-color:#111;
border-radius:8px;
color:white;padding: 5px 12px;
}
.button2:hover{
  background-color: #444;
}
@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
 
 
}
input[type=text]{
width:50%;
box-sizing:border-box;
border:2px solid purple;
font-size:16px;
background-color:white;
background-postion:5px 5px;
background-repeat:no-repeat;
padding:5px 12px 5px 12px;

}
div.a{
position:absolute;
right:-10px;
}
.h{
  background-image: url("images/header.jpg");position:inherit;height: 230px;width:100%;background-size: cover;opacity:0.5;
}

.f{
background-image: url("images/bg02.jpg");position:absolute;width:100%;height:200px;opacity:0.5;
}
.row
{
   width: calc(60% + 60px);
   margin-bottom:0 auto 30px;
   color: white;
}
.btn {
  font-weight: 400;
  font-size: 20px;
  letter-spacing: 0.5px;
  -moz-transition: 0.2s ease-in;
  -o-transition: 0.2s ease-in;
  -webkit-transition: 0.2s ease-in;
  -ms-transition: 0.2s ease-in;
  transition: 0.2s ease-in;
  border-radius: 0;
  padding: 9px 10px;
}
.btn-circle {
  border-radius: 50% !important;
  height: 40px;
  width: 40px;
  padding: 3px !Important;
}
.btn-social {
  font-size: 13px;
  padding: 8px 15px;
  letter-spacing: 0.5px;
  vertical-align: middle;
  -moz-transition: 0.2s ease-in;
  -o-transition: 0.2s ease-in;
  -webkit-transition: 0.2s ease-in;
  -ms-transition: 0.2s ease-in;
  transition: 0.2s ease-in;
}
.btn-social span {
  margin-left: 10px;
}
.btn-facebook, .btn-facebook:active, .btn-facebook:focus {
  color: #4e68a1;
  background: transparent;
  border: 2px solid #4e68a1;
}

.btn-facebook:hover {
  color: white !important;
  background: #4e68a1;
  border: 2px solid #4e68a1;
}

.btn-facebook-filled, .btn-facebook-filled:active, .btn-facebook-filled:focus {
  color: white;
  background: #4e68a1;
  border: 2px solid #4e68a1;
}

.btn-facebook-filled:hover {
  color: white;
  background: #3b4f7a;
  border: 2px solid #3b4f7a;
}

.btn-facebook-link, .btn-facebook-link:active, .btn-facebook-link:focus {
  color: #4e68a1;
  background: transparent;
  border: none;
}

.btn-facebook-link:hover {
  color: #3b4f7a;
}
.fa{display:inline-block;
  color:white;
 font:normal normal normal 14px/1 ;
 font-size:18px;text-rendering:auto;
 -webkit-font-smoothing:antialiased;
 }
  
.fa-facebook:before{content:"\f09a"}

.btn-twitter, .btn-twitter:active, .btn-twitter:focus {
  color: #65b5f2;
  background: transparent;
  border: 2px solid #65b5f2;
}

.btn-twitter:hover {
  color: white;
  background: #65b5f2;
  border: 2px solid #65b5f2;
}

.btn-twitter-filled, .btn-twitter-filled:active, .btn-twitter-filled:focus {
  color: white;
  background: #65b5f2;
  border: 2px solid #65b5f2;
}

.btn-twitter-filled:hover {
  color: white;
  background: #5294c6;
  border: 2px solid #5294c6;
}

.btn-twitter-filled:hover {
  color: white;
  background: #5294c6;
  border: 2px solid #5294c6;
}

.btn-twitter-link, .btn-twitter-link:active, .btn-twitter-link:focus {
  color: #65b5f2;
  background: transparent;
  border: none;
}

.btn-twitter-link:hover {
  color: #5294c6;
}
.fa-twitter:before{content:"\f099"}
.btn-google, .btn-google:active, .btn-google:focus {
  color: #e05d4b;
  background: transparent;
  border: 2px solid #e05d4b;
}

.btn-google:hover {
  color: white;
  background: #e05d4b;
  border: 2px solid #e05d4b;
}

.btn-google-filled, .btn-google-filled:active, .btn-google-filled:focus {
  color: white;
  background: #e05d4b;
  border: 2px solid #e05d4b;
}

.btn-google-filled:hover {
  color: white;
  background: #b94c3d;
  border: 2px solid #b94c3d;
}

.btn-google-link, .btn-google-link:active, .btn-google-link:focus {
  color: #e05d4b;
  background: transparent;
  border: none;
}

.btn-google-link:hover {
  color: #b94c3d;
}
.fa-google:before{content:"\f1a0"}
</style>
 <SCRIPT type="text/javascript">

window.history.forward();
function noBack() { window.history.forward(); }
</SCRIPT>
<SCRIPT type="text/javascript">
    window.history.forward();
    function noBack() { window.history.forward(); }
</SCRIPT>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1,width=device-width,initial scale=1">
<title>ONLINE EXAMINATION</title>
</head>

<body>




  


<header class="h"  style="border-radius:15px;">


<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href="about.php">About</a>

  <a href="contact.php">Contact</a>
  <a href="sInstruct.php">Instruction</a>
</div>

<div id="main">
  <button class="openbtn" onclick="openNav()">☰ Options</button>  
 
</div>

<script>
function openNav() {
  document.getElementById("mySidebar").style.width = "200px";
  document.getElementById("main").style.marginLeft = "250px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)"
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.body.style.backgroundColor = "white";
}

</script>
<div class="logo">
        <img src="images/do.jpg">
      </div>
<center>
<h1><b><i style="color:white;cursor:default;font-size:2vw;">Exam Section</i></b></h1></center>
<div class="a"><input type="text" name="search" placeholder="Search.."></div>
</header>


<br>
<button class="button button2" onclick="window.location.href='https://www.gitam.ac.in'">Home</button>
<center>
<br><br><h3 style="background-color: #111;color: white;font-size:1vw;opacity: 0.7">Exam Home Panel</h3><br><br><br><br><br><br><br><br><br><br><br><div class="row"></div>
<table style="border=1" width="50%" cellpadding="5" cellspacing="5">
	<tr >
<th><input type="button" class="button button1" value="STUDENT LOGIN" onclick="location.href='studlog.php'"></th>
<th><input type="button" class="button button1" value="ADMINISTRATOR LOGIN" onclick="location.href='adminlogin.php'"></th>

</tr>
</table>
</center>
<br><br>
<footer class="f"  style="border-radius:30px;" >
<MARQUEE style="color: white; background-color: purple;font-size:1vw;opacity: 0.9;"><b>NOTICES:</b></MARQUEE><br>
<br><center><h4 style="color: white;font-size:1vw;">@All rights Reserved &nbsp;&nbsp;&nbsp;Powered byGitamStudents</h4></center><center>  <button type="button" class="btn-social btn-facebook-filled btn-circle" onclick="location.href='https://www.facebook.com/login'"><b class="fa">f</b></button>
  <button type="button" class="btn-social btn-twitter-filled btn-circle" onclick="location.href='https://www.twitter.com/login'"><b class="fa">t</b></button>
  <button type="button" class="btn-social btn-google-filled btn-circle" onclick="location.href='https://www.google.com/gmail'"><b class="fa">@</b></button>
</center>
<br><br><br><br>
</footer>
</div>
</body>

</html>
