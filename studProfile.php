<!DOCTYPE html>
<html>
<head>
  <style type="text/css" media="screen">
    
      @import url(https://fonts.googleapis.com/css?family=Raleway:100,200,400,600);

html{
  height: 100%;
}
body {
  min-height: 100%;
  height: 100%;
  text-align: center;
  background: url("images/bg.jpg") 50%;
  background-size: cover;
  background-attachment: fixed;
  font-family: "Raleway", "Helvetica Neue", Helvetica, Verdana, Tahoma, sans-serif;
  letter-spacing: 2px;
  line-height: 150%;
  color: #fff;
}
[class*='col-'] {
  margin-right: 15px;
}
[class*='col-']:last-of-type {
  margin-right: 0;
}
.col-1-4 {
  width: 25%;
}
.col-1-3 {
  width: calc(33.33333% - 10px);
}
.col-3-4 {
  width: 75%;
}
[class*='col-'] {
  float: left;
}
.content:first-of-type {
  margin-top: 100px;
}
.sheath {
  width: 100%;
  position: absolute;
  background: -webkit-gradient(linear, left top, right top, color-stop(0%, rgba(53,53,53, .4)), color-stop(100%, rgba(53,53,53, .6)));
}
.content {
  opacity: 0;
  padding: 1px;
  width: 100%;
  margin: 0 auto;
  background: -webkit-gradient(linear, left top, right top, color-stop(0%, rgba(89,120,145, .5)), color-stop(100%, rgba(141,149,167, .9)));
    -webkit-animation: dropfade .3s ease-in 1s forwards; /* Safari and Chrome */ 
       -moz-animation: dropfade .3s ease-in 1s forwards; /* Firefox */
        -ms-animation: dropfade .3s ease-in 1s forwards; /* Internet Explorer */
         -o-animation: dropfade .3s ease-in 1s forwards; /* Opera */
            animation: dropfade .3s ease-in 1s forwards;
}
.skills {
  text-align: center;
  clear: both;
}
.skills p:nth-of-type(odd) {
  color: white;
  padding: 0 5px;
  line-height: 2em;
  background: #444;
  display: inline-block;
}
.skills p:nth-of-type(even) {
  font-weight: 600;
  font-size: .7em;
  text-transform: uppercase;
  margin-bottom: 1em;
}
.skills p:last-of-type {

  margin-bottom: 0;
}
.skills .a {
  float: left;
  width: 30%;
}
.skills .b {
  float: left;
  width: calc(70% - 10px);
  margin-left: 10px;
  line-height: 4em;
  background: rgba(141,149,167,.2);
}

.time {
  height: calc(2em);
  background: rgb(141,149,167);
}



.tricks {
  display: inline-block;
  padding: 20px;
  color: #666;
  opacity: 0;
  width: 100%;
  background: rgba(255,255,255,.8);
    -webkit-animation: dropfade .3s ease-in 1s forwards; /* Safari and Chrome */ 
       -moz-animation: dropfade .3s ease-in 1s forwards; /* Firefox */
        -ms-animation: dropfade .3s ease-in 1s forwards; /* Internet Explorer */
         -o-animation: dropfade .3s ease-in 1s forwards; /* Opera */
            animation: dropfade .3s ease-in 1s forwards;
}
.shmall {
  font-size: .8em;
  text-transform: uppercase;
  text-spacing: 100%;
  line-height: 1.1em;
}
.title {
  font-weight: 600;
  text-transform: uppercase;
  font-size: 1em;
  line-height: 1.1em;
}

}
.endroit {
  font-weight: 400;
  text-transform: capitalize;
  font-size: 1em;
}
.cover {
  position: absolute;
  padding-top: 22px;
  height: 130px;
  width: calc((60% + 60px)/3 - 30px);
  opacity: 0;
  margin-left: 5px;
  margin-top: -72px;
  color: #fff !important;
  background: rgb(141,149,167) !important;
  border: 10px solid rgb(141,149,167);
  -webkit-transition: .2s ease-in-out all;
}

.cover:hover:after {
  left: -20px;
  top: -20px;
  border: 2px solid rgb(141,149,167);  
  height: 150px;
  width: calc(100% + 41px);
}

.cover:after {
  content: '';  
  left: -10px;
  top: -10px;
  position: absolute;   
  border: 2px solid rgb(141,149,167);  
  height: 130px;
  width: calc(100% + 21px);
  -webkit-transition: all .3s ease-in;
}

.stove:hover > .cover {
  opacity: 1;
  -webkit-transition: .7s ease-in-out all;
}

h3 {
  position: relative;
  font-size: .4em;
  letter-spacing: 2px;
  font-weight: 200;
  top: 25px;
}
.dot {
  padding: 65px 5px 5px 5px;
  width: 100%;
  background: rgba(255,255,255,.8);
  height: 150px;
  color: rgb(141,149,167);
  position: relative;
  margin-bottom: 30px
}
.dot.r {
  width: calc((60% + 60px)*.45);
  right: calc((100% - (60% + 60px)) / 2);
  position: absolute;
  margin-top: -100px
}
.dot.l:after {
  content: '';
  width: 0; 
  height: 0; 
  border-top: 10px solid transparent;
  border-bottom: 10px solid transparent;
  border-left: 10px solid rgba(255,255,255,.8);
  right: -10px;
  top: 10px;
  position: absolute;   
}
.dot.r:after {
  content: '';
  width: 0; 
  height: 0; 
  border-top: 10px solid transparent;
  border-bottom: 10px solid transparent;
  border-right: 10px solid rgba(255,255,255,.8);
  left: -10px;
  top: 10px;
  position: absolute;   
}
.stove {
  padding: 65px 5px 5px 5px;
  opacity: 0;
  background: rgba(255,255,255,.8);
  height: 150px;
  color: rgb(141,149,167);
  overflow: hidden;
  -webkit-transition: .5s ease-in-out all;
}

.stove:hover {
  color: rgba(0,0,0,0);
  background: none;
  cursor: pointer;
  -webkit-transition: .2s ease-out all;
}

.stove:nth-of-type(1) {
  
  -webkit-animation: fadein .2s ease-in 1.5s forwards;
       -moz-animation: fadein .2s ease-in 1.5s forwards;
        -ms-animation: fadein .2s ease-in 1.5s forwards;
         -o-animation: fadein .2s ease-in 1.5s forwards;
            animation: fadein .2s ease-in 1.5s forwards;
}
.stove:nth-of-type(2) {
  -webkit-animation: fadein .2s ease-in 1.6s forwards;
       -moz-animation: fadein .2s ease-in 1.6s forwards;
        -ms-animation: fadein .2s ease-in 1.6s forwards;
         -o-animation: fadein .2s ease-in 1.6s forwards;
            animation: fadein .2s ease-in 1.6s forwards;
}
.stove:nth-of-type(3) {
  -webkit-animation: fadein .2s ease-in 1.7s forwards;
       -moz-animation: fadein .2s ease-in 1.7s forwards;
        -ms-animation: fadein .2s ease-in 1.7s forwards;
         -o-animation: fadein .2s ease-in 1.7s forwards;
            animation: fadein .2s ease-in 1.7s forwards;
}
a {
  color: #fff;
  font-weight: 500; }
.head {
  font-size: 1.5em;
  font-weight: 600;
  text-transform: uppercase;
  margin-bottom: .5em;
  min-height: 100%;
}
.name {
  font-size: 3em;
  letter-spacing: 5px;
  font-weight: 600;
  text-transform: uppercase;
  padding: 50px;
  margin: 0 auto 5%;
  background:url("header.jpg");
  background-size:100% 100%;
-webkit-animation: fadein .3s ease-out;
       -moz-animation: fadein .3s ease-out;
        -ms-animation: fadein .3s ease-out;
         -o-animation: fadein .3s ease-out;
            animation: fadein .3s ease-out;opacity:
}
.row {
  content: "";
  display: table;
  clear: both;
  width: calc(60% + 60px);
  margin: 0 auto 30px;
}

*, *:after, *:before {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

.info {
  text-transform: uppercase;
  font-weight: 600;
  margin: 35px auto;
  width: 90%;
  position: relative;
  padding: 18px 0;
  font-size: 1em;
  border-top: solid 2px ;
  border-bottom: solid 2px ; }

.me {
  opacity: 0;
  height: 160px;
  width: 160px;
  border-radius: 80px;
  margin: 0 auto;
  background:  url("Anonymou-.jpg") center; 
  background-size: cover;
  border: 2px white solid;
  margin-top: -80px;
  position: relative; 
    -webkit-animation: fadein .5s ease-in .8s forwards;
       -moz-animation: fadein .5s ease-in .8s forwards;
        -ms-animation: fadein .5s ease-in .8s forwards;
         -o-animation: fadein .5s ease-in .8s forwards;
            animation: fadein .5s ease-in .8s forwards;
}

.me:after {
  content: '';  
  position: absolute;   
  border-radius: 800px;
  border: 2px solid #fff;  
  
   -webkit-animation: boop .3s ease-out 1.2s forwards;
       -moz-animation: boop .3 ease-out 1.2s forwards;
        -ms-animation: boop .3 ease-out 1.2s forwards;
         -o-animation: boop .3 ease-out 1.2s forwards;
            animation: boop .3 ease-out 1.2s forwards;
}

@keyframes fadein {
    from { opacity: 0; }
    to   { opacity: 1; }
}

@keyframes ninety {
    from { width: 0; }
    to   { width: 90%; }
}
@keyframes eighty {
    from { width: 0; }
    to   { width: 80%; }
}
@keyframes seventy {
    from { width: 0; }
    to   { width: 70%; }
}
@keyframes sixty {
    from { width: 0; }
    to   { width: 60%; }
}
@keyframes fifty {
    from { width: 0; }
    to   { width: 50%; }
}
@keyframes forty {
    from { width: 0; }
    to   { width: 40%; }
}
@keyframes thirty {
    from { width: 0; }
    to   { width: 30%; }
}
@keyframes twenty {
    from { width: 0; }
    to   { width: 20%; }
}
@keyframes ten {
    from { width: 0; }
    to   { width: 10%; }
}

@keyframes dropfade {
    from { opacity: 0; margin-top: 90px; }
    to   { opacity: 1; margin-top: 110px; }
}

@keyframes boop {
    from {  width: 160px;  
            height: 160px;  
            left: -1px; top: -1px; }
    to   {  width: 180px;  
            height: 180px;  
            left: -12px; top: -12px; }
}

/* Firefox */
@-moz-keyframes fadein {
    from { opacity: 0; }
    to   { opacity: 1; }
}


@-moz-keyframes dropfade {
    from { opacity: 0; margin-top: 90px; }
    to   { opacity: 1; margin-top: 110px; }
}

@-moz-keyframes boop {
    from {  width: 160px;  
            height: 160px;  
            left: -1px; top: -1px; }
    to   {  width: 180px;  
            height: 180px;  
            left: -12px; top: -12px; }
}

/* Safari and Chrome */
@-webkit-keyframes fadein {
    from { opacity: 0; }
    to   { opacity: 1; }
}



@-webkit-keyframes dropfade {
    from { opacity: 0; margin-top: 90px; }
    to   { opacity: 1; margin-top: 110px; }
}

@-webkit-keyframes boop {
    from {  width: 160px;  
            height: 160px;  
            left: -1px; top: -1px; }
    to   {  width: 190px;  
            height: 190px;  
            left: -17px; top: -17px; }
}

/* Internet Explorer */
@-ms-keyframes fadein {
    from { opacity: 0; }
    to   { opacity: 1; }
}



@-ms-keyframes dropfade {
    from { opacity: 0; margin-top: 90px; }
    to   { opacity: 1; margin-top: 110px; }
}

@-ms-keyframes boop {
    from {  width: 160px;  
            height: 160px;  
            left: -1px; top: -1px; }
    to   {  width: 180px;  
            height: 180px;  
            left: -12px; top: -12px; }
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
color:white;background-color:red;padding: 11px 22px;border-radius:12px;opacity: 0.9;
}
.button:hover{
  background-color: purple;}
.button1
{background-color:#111;padding: 14px 22px;
width:70%;
}
.button2
{
background-color:red;padding: 11px 32px;

}
.button3
{
background-color:green;padding: 11px 32px;

}
.f{
  background-image: url("images/bg02.jpg");position:absolute;height:200px;width: 100%;opacity: 0.9;
  
}
 .logo img{
   float: left;
   width: 150px;
   height: auto;
   margin: 20px;
}
  </style>
  <SCRIPT type="text/javascript">

window.history.forward();
function noBack() { window.history.forward(); }
</SCRIPT>
  <title>profile check</title>
</head>
<body oncontextmenu="return false;">
<div class="sheath">
<div id="body-wrapper">
  <br><div class="logo">
        <img src="images/do.jpg">
      </div>
  <div class="name" style="border-radius: 15pxfont-size:2vw;">My<h3>Profile</h3></div>
  
  <div class="row">    
      <div class="content">
        <div class="me"></div>
        <div class="info">
          <p>
           My Name
          </p>
        </div>
      </div> 
  </div>
 <div class="row">
  <div class="tricks">
    <div class="skills">
      <div class="a">
        <p>Name</p>
        <p class="lvl"></p>
      </div>
      <div class="b">
        put command to get name here
      </div>
    </div> 
    <div class="skills">
      <div class="a">
        <p>Registration no.</p>
        <p class="lvl"></p>
      </div>
      <div class="b">
       put command to get reg here
      </div>
    </div> 
    <div class="skills">
      <div class="a">
        <p>Father's Name</p>
        <p class="lvl"></p>
      </div>
      <div class="b">
      put command to get fname here
      </div>
    </div> 
    <div class="skills">
      <div class="a">
        <p>Mother's Name</p>
        <p class="lvl"></p>
      </div>
      <div class="b">
        put command to get mname here
      </div>
    </div>  
    <div class="skills">
      <div class="a">
        <p>Date of Birth</p>
        <p class="lvl"></p>
      </div>
      <div class="b">
        put command to get dob here
      </div>
    </div>  
    <div class="skills">
      <div class="a">
        <p>E-mail ID</p>
        <p class="lvl"></p>
      </div>
      <div class="b">
        put command to get dob here
      </div>
    </div>
    <div class="skills">
      <div class="a">
        <p>Contact no.</p>
        <p class="lvl"></p>
      </div>
      <div class="b">
       put command to get contact here
      </div>
    </div> 
    <div class="skills">
      <div class="a">
        <p>Additional Contact No.</p>
        <p class="lvl"></p>
      </div>
      <div class="b">
        put command to get cont2 here
      </div>
    </div> 
    <div class="skills">
      <div class="a">
        <p>Address</p> 
        <p class="lvl"></p>
      </div>
      <div class="b">
        put command to get addr here
      </div>
    </div> 
    <div class="skills">
      <div class="a">
        <p>Year</p>
        <p class="lvl"></p>
      </div>
      <div class="b">
         put command to get year here
      </div>
    </div> 
    <div class="skills">
      <div class="a">
        <p>Branch</p>
        <p class="lvl"></p>
      </div>
      <div class="b">
        put command to get branch here
      </div>
    </div> 
     
  </div>
 </div>
 <div class="head">Update</div>
  <div class="row">
    <div class="col-1-3 stove">
      <div class="title"><input type="button" class="button button1" value="Update Profile picture"></div>
     
    </div>
    <div class="col-1-3 stove">
      <div class="title"><input type="button" class="button button3" value="Print" onclick="myPrint();"></div>
   
    </div>
    <div class="col-1-3 stove">
      <div class="title"><input type="button" class="button button1" value="Edit Profile Details"></div>
      
    </div>
  </div>
  
  <div class="head">Security Settings</div>
  
  <div class="row">
    <div class="dot l">
      <input type="button" class="button button1" value="Help">
    </div>
  
  </div>

  </div><br><hr><br><input type="button" class="button button2" value="< Previous Page" onclick="location.href='studentpanel.php'"><br>
 <script>
      function openForm() {
        document.getElementById("popupForm").style.display="block";
      }
      
      function closeForm() {
        document.getElementById("popupForm").style.display="none";
      }
      function myPrint()
      {
        window.print();
      }
    </script>
<footer class="f" style="border-radius:30px;font-size:2vw;" ><br><br><br><center><a style="color:white;">@All rights Reserved &nbsp;&nbsp;&nbsp;Powered by GitamStudents</a></center>
  <br><br>
</footer></div>



</body>
</html>