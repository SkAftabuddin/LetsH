<html>
 <head>
       
<title>Profile Card Page</title>
  <style type="text/css">

body { margin: 0;
    padding: 0;
    height: 100%;
font-size: 100%;
  font-family: arial;
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
       background-image: url("images/bg02.jpg");position: absolute;width: 100%;height: 200px;opacity: 0.9;top:425%;
}
.input
{
       color:white;
       opacity:1;
       border-radius: 8px;background-color: black;font-size:16px;font-weight:bold;padding-top: 6px;padding-bottom: 6px;font-synthesis: style;
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
}
.button:hover{
  background-color: #111;
}
.button1
{background-color:green;color:white;opacity: 0.9;padding:11px 32px;
}
.button2
{background-color:red;color:white;opacity: 0.9;padding:6px 10px;
}

 .open-btn {
      display: flex;
      justify-content: left;
      }
      /* Style and fix the button on the page */
      .open-button {
      background-color: #1c87c9;
      color: white;
      padding: 6px 10px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      opacity: 0.8;
     
      }
      /* Position the Popup form */
      .login-popup {
      position:static;
      text-align: center;
      width: 100%;
      }
      /* Hide the Popup form */
      .form-popup {
      display: none;
      position:fixed;
      left:35%;
      top:5%;
      transform: translate(-35%,5%);
      border: 1px solid #666;
      background-color: white;
      border-radius: 15px;
      z-index: 10;
      width: 50%;
      top:40%;
      opacity:0.8;
      
      }
      /* Styles for the form container */
      .form-container {
      width: 100%;
      padding:20px;
      background-color:#fff;
      }
      
      /* When the inputs get focus, do something */
      
      /* Style submit/login button */
      
      /* Style cancel button */
      .form-container .cancel {
      background-color: #cc0000;
      }
      /* Hover effects for buttons */
      .form-container .btn:hover, .open-button:hover {
      opacity: 1;
      }


 
       .cse {top:38%;
       color: white;
       }
       body {
       margin: 0px;
       padding:0px;
           
       font-family: arial;
       box-sizing: border-box;          
       }
       .card-container {
       width: 160px;
       height: 220px;
       background: #FFF;
       border-radius: 6px;
       position: absolute;
       top: 58%;
       left: 50%;
       transform: translate(-50%,-50%);
       box-shadow: 0px 1px 10px 1px #000;   
       overflow: hidden;
       display: inline-block;           
       }
       .upper-container {
       height: 80px;
       background: #7F00FF;              
       }
       .image-container {
       background: white;
       width: 50px;
       height: 50px;
       border-radius: 50%; 
       padding: 5px;
       transform: translate(50px,50px);                        
       }
       .image-container img {
       width: 50px;
       height: 50px;
       border-radius: 50%;
       
       }
       .lower-container {
       height: 280px;
       background: #FFF;
       padding: 20px;
       padding-top: 15px; 
       text-align: center;             
       }
       .lower-container h5,h6 {
       box-sizing: border-box;
       line-height: .8;
       font-weight: bold;             
       }
       .lower-container h6 {
       color: #7F00FF;
       opacity: .5;
       font-weight: bold;            
       }
       .lower-container .btn {
       padding: 6px 10px;
       background: #7F00FF;
       border: none;
       color: white;
       border-radius: 15px;
       font-size: 6px;
       text-decoration: none;
       font-weight: bold;
       transition: all .3s ease-in;
       }
       .lower-container. btn:hover {
       background: transparent;
       color: #7F00FF;
       border: 2px solid #7F00FF;
       }
       .profile {
       position: absolute;
       top: 93%;
       left: 17%;
       transform: translate(-50%,-50%);
       text-align: center;
       height: 120px;
       width: 70px;
       background: #2b313e;
       border-radius: 10px;
       box-shadow: 0 5px 15px black;
       padding: 20px;
       }
       .image {
       width: 60px;
       height: 60px;
       border-radius: 50%;
       overflow: hidden;
       border: 4px solid #fff;
       object-fit: cover;
       border-radius: 50%;
       margin: 0 auto;
       display: block;
       }
       .image .img {
       width: 100%;
       }
       .text {
       margin: 20px 0 0;
       padding: 0;
       color: yellow;
       font-size: 0.7em;
       font-weight: bold;
       }
       .line  {
       color: red;
       }
       .profile1 {
       position: absolute;
       top: 93%;
       left: 50%;
       transform: translate(-50%,-50%);
       text-align: center;
       height: 120px;
       width: 70px;
       background: #2b313e;
       border-radius: 10px;
       box-shadow: 0 5px 15px black;
       padding: 20px;
       }
       .image1 {
       width: 60px;
       height: 60px;
       border-radius: 50%;
       overflow: hidden;
       border: 4px solid #fff;
       object-fit: cover;
       border-radius: 50%;
       margin: 0 auto;
       display: block;
       }
       .image1 .img {
       width: 100%;
       }
       .text1 {
       margin: 20px 0 0;
       padding: 0;
       color: yellow;
       font-size: 0.6em;
       font-weight: bold;
       }
       .profile2 {
       position: absolute;
       top: 93%;
       left: 83%;
       transform: translate(-50%,-50%);
       text-align: center;
       height: 120px;
       width: 70px;
       background: #2b313e;
       border-radius: 10px;
       box-shadow: 0 5px 15px black;
       padding: 20px;
       }
       .image2 {
       width: 60px;
       height: 60px;
       border-radius: 50%;
       overflow: hidden;
       border: 4px solid #fff;
       object-fit: cover;
       border-radius: 50%;
       margin: 0 auto;
       display: block;
       }
       .image2 .img {
       width: 100%;
       }
       .text2 {
       margin: 20px 0 0;
       padding: 0;
       color: yellow;
       font-size: 0.6em;
       font-weight: bold;
       }
       .ee {
       position: absolute;
       top: 120%;
       left: 45%;
       color: red;
       }
       .civ {
       position: absolute;
       top: 224%;
       left: 45%;
       color: red;
       }
       .mec {
       position: absolute;
       top: 334%;
       left: 40%;
       color: red;
       }
       .card-container1 {
       width: 160px;
       height: 220px;
       background: #FFF;
       border-radius: 6px;
       position: absolute;
       top: 150%;
       left: 50%;
       transform: translate(-50%,-50%);
       box-shadow: 0px 1px 10px 1px #000;   
       overflow: hidden;
       display: inline-block;           
       }
       .card-container2 {
       width: 160px;
       height: 220px;
       background: #FFF;
       border-radius: 6px;
       position: absolute;
       top: 250%;
       left: 50%;
       transform: translate(-50%,-50%);
       box-shadow: 0px 1px 10px 1px #000;   
       overflow: hidden;
       display: inline-block;           
       }
       .card-container3 {
       width: 160px;
       height: 220px;
       background: #FFF;
       border-radius: 6px;
       position: absolute;
       top: 364%;
       left: 50%;
       transform: translate(-50%,-50%);
       box-shadow: 0px 1px 10px 1px #000;   
       overflow: hidden;
       display: inline-block;           
       }
       .profile01 {
       position: absolute;
       top: 198%;
       left: 17%;
       transform: translate(-50%,-50%);
       text-align: center;
       height: 120px;
       width: 70px;
       background: #2b313e;
       border-radius: 10px;
       box-shadow: 0 5px 15px black;
       padding: 20px;
       } 
       .profile11 {
       position: absolute;
       top: 198%;
       left: 50%;
       transform: translate(-50%,-50%);
       text-align: center;
       height: 120px;
       width: 70px;
       background: #2b313e;
       border-radius: 10px;
       box-shadow: 0 5px 15px black;
       padding: 20px;
       }
       .profile21 {
       position: absolute;
       top: 198%;
       left: 83%;
       transform: translate(-50%,-50%);
       text-align: center;
       height: 120px;
       width: 70px;
       background: #2b313e;
       border-radius: 10px;
       box-shadow: 0 5px 15px black;
       padding: 20px;
       }
       .profile02 {
       position: absolute;
       top: 298%;
       left: 17%;
       transform: translate(-50%,-50%);
       text-align: center;
       height: 120px;
       width: 70px;
       background: #2b313e;
       border-radius: 10px;
       box-shadow: 0 5px 15px black;
       padding: 20px;
       }
       .profile12 {
       position: absolute;
       top: 298%;
       left: 50%;
       transform: translate(-50%,-50%);
       text-align: center;
       height: 120px;
       width: 70px;
       background: #2b313e;
       border-radius: 10px;
       box-shadow: 0 5px 15px black;
       padding: 20px;
       }
       .profile22 {
       position: absolute;
       top: 298%;
       left: 83%;
       transform: translate(-50%,-50%);
       text-align: center;
       height: 120px;
       width: 70px;
       background: #2b313e;
       border-radius: 10px;
       box-shadow: 0 5px 15px black;
       padding: 20px;
       }
       .profile3 {
       position: absolute;
       top: 400%;
       left: 17%;
       transform: translate(-50%,-50%);
       text-align: center;
       height: 120px;
       width: 70px;
       background: #2b313e;
       border-radius: 10px;
       box-shadow: 0 5px 15px black;
       padding: 20px;
       }
       .profile13 {
       position: absolute;
       top: 400%;
       left: 50%;
       transform: translate(-50%,-50%);
       text-align: center;
       height: 120px;
       width: 70px;
       background: #2b313e;
       border-radius: 10px;
       box-shadow: 0 5px 15px black;
       padding: 20px;
       }
       .profile23 {
       position: absolute;
       top: 400%;
       left: 83%;
       transform: translate(-50%,-50%);
       text-align: center;
       height: 120px;
       width: 70px;
       background: #2b313e;
       border-radius: 10px;
       box-shadow: 0 5px 15px black;
       padding: 20px;
       }





  </style>
 </head>
 <body>
       <header class="h" style="border-radius: 15px">
       



       <br>
       <br><div class="logo">
        <img src="images/do.jpg">
      </div>
      <center>
<h1>
       <b><i style="color: white;font-size:2vw;">Exam Section</i></b></h1></center><br>

</header>
       <h1 class="cse"><center><b><u>CSE</u></b></center></h1>
       <div class="card-container">
       <div class="upper-container">
       <div class="image-container">
       <img src="images/R.jpg"/>
       </div>  
       </div>
       <div class="lower-container">
       <div>
       <h5>Rajesh Ghosh</h5>
       <h6>Head Of Department<br><br>GITAM,BBSR</h6>
       </div>
       <div>
       

<input type="button" class="open-button" value="Open" onclick="openForm()">
<div class="login-popup">
       <div class="form-popup" id="popupForm">
<table  class="form-container" style="background-color: #111;" id="popupForm" rules="all">
        <tr style="color: yellow;">
 
 <td></td>
</tr>
</table>
               <button type="button" class="button button2" onclick="closeForm()">Close</button>
</div>
</div>



       </div>
       </div>
       </div><br>
       <div class="profile"> 
       <img src="images/R.jpg" alt="text" class="image"><br><hr>
       <div class="text">Chanti Reddy</div>
       </div>
       <div class="profile1"> 
       <img src="images/R.jpg" alt="text" class="image1"><br><hr>
       <div class="text1">Chanti Reddy1</div>
       </div>
       <div class="profile2"> 
       <img src="images/R.jpg" alt="text" class="image2"><br><hr>
       <div class="text2">Chanti Reddy2</div>
       </div>
       <h1 class="ee"><b><u>EE</u></b></h1>
       <div class="card-container1">
       <div class="upper-container">
       <div class="image-container">
       <img src="images/R.jpg"/>
       </div>  
       </div>
       <div class="lower-container">
       <div>
       <h5>Sumita Mam</h5>
       <h6>Head Of Department<br><br>GITAM,BBSR</h6>
       </div>
       <div>
       <a href="#" class="btn">View Profile</a>
       </div>
       </div>
       </div><br>
       <div class="profile01"> 
       <img src="images/R.jpg" alt="text" class="image"><br><hr>
       <div class="text">Chanti Reddy</div>
       </div>
       <div class="profile11"> 
       <img src="images/R.jpg" alt="text" class="image1"><br><hr>
       <div class="text1">Chanti Reddy1</div>
       </div>
       <div class="profile21"> 
       <img src="images/R.jpg" alt="text" class="image2"><br><hr>
       <div class="text2">Chanti Reddy2</div>
       </div>
       <h1 class="civ"><b><u>CIVIL</u></b></h1>
       <div class="card-container2">
       <div class="upper-container">
       <div class="image-container">
       <img src="images/R.jpg"/>
       </div>  
       </div>
       <div class="lower-container">
       <div>
       <h5>Prashant Kumar</h5>
       <h6>Head Of Department<br><br>GITAM,BBSR</h6>
       </div>
       <div>
       <a href="#" class="btn">View Profile</a>
       </div>
       </div>
       </div><br>
       <div class="profile02"> 
       <img src="images/R.jpg" alt="text" class="image"><br><hr>
       <div class="text">Chanti Reddy</div>
       </div>
       <div class="profile12"> 
       <img src="images/R.jpg" alt="text" class="image1"><br><hr>
       <div class="text1">Chanti Reddy1</div>
       </div>
       <div class="profile22"> 
       <img src="images/R.jpg" alt="text" class="image2"><br><hr>
       <div class="text2">Chanti Reddy2</div>
       </div>
       <h1 class="mec"><b><u>MECHANICAL</u></b></h1>
       <div class="card-container3">
       <div class="upper-container">
       <div class="image-container">
       <img src="images/R.jpg"/>
       </div>  
       </div>
       <div class="lower-container">
       <div>
       <h5>Rajesh Pati</h5>
       <h6>Head Of Department<br><br>GITAM,BBSR</h6>
       </div>
       <div>
       <a href="#" class="btn">View Profile</a>
       </div>
       </div>
       </div><br>
       <div class="profile3"> 
       <img src="images/R.jpg" alt="text" class="image"><br><hr>
       <div class="text">Chanti Reddy</div>
       </div>
       <div class="profile13"> 
       <img src="images/R.jpg" alt="text" class="image1"><br><hr>
       <div class="text1">Chanti Reddy1</div>
       </div>
       <div class="profile23"> 
       <img src="images/R.jpg" alt="text" class="image2"><br><hr>
       <div class="text2">Chanti Reddy2</div>
       </div>
       <br>
       <script >
              function openForm() {
        document.getElementById("popupForm").style.display="block";
      }
      
      function closeForm() {
        document.getElementById("popupForm").style.display="none";
      }
     


       </script>
    <br>

<footer class="f">
<MARQUEE style="color:white; background-color: red;opacity: 0.7;"><b>NOTICES</b>:</MARQUEE><br>
<br><center><h4 style="color:white;font-size:1vw;">@All rights Reserved &nbsp;&nbsp;&nbsp;Powered by GitamStudents</h4></center>

</footer>
 </body>
</html>