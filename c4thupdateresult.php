<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="assets/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/glyphicons-halflings-regular.ttf">
<style>
	* {
      box-sizing: border-box;
      }
	body { margin: 0;
    padding: 0;
    height: 100%;
font-size: 100%;
  font-family: "Lato", sans-serif;
background-image:url("images/bg.jpg");
background-size: cover;
font-family: Roboto, Helvetica, sans-serif;
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
.o
{
   size: 14px;color: white;border-radius: 15px;background-color: purple;font-size:16px;opacity: 0.9;
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
color:white;background-color:red;padding: 11px 32px;border-radius:12px;opacity: 0.9;
}
.button:hover{
  background-color:#111;}
.button1
{background-color:purple;padding: 11px 22px;
color:white;
}
.button2
{
background-color:red;padding: 11px 32px;
color:white;
}
.button3
{
background-color:green;padding: 11px 32px;
color:white;
}
.fa
{
	background-color: powderblue;
	border-color: white;
}

/* Fix the button on the left side of the page */
      .open-btn {
      display: flex;
      justify-content: left;
      }
      /* Style and fix the button on the page */
      .open-button {
      background-color: dodgerblue;
      color: white;
      padding: 11px 32px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      opacity: 0.8;
     
      }
      /* Position the Popup form */
      .login-popup {
      position: relative;
      text-align: center;
      width: 100%;
      }
      /* Hide the Popup form */
      .form-popup {
      display: none;
      position: fixed;
      left: 45%;
      top:5%;
      transform: translate(-45%,5%);
      border: 2px solid #666;
       background-color: white;
      border-radius: 15px;
      z-index: 9;
     width: 45%;
      top:30%;
      opacity:0.9;
      }
      /* Styles for the form container */
      .form-container {
      width: 20%;
      padding: 20px;
      background-color: #fff;
      }
      /* Full-width for input fields */
      .form-container input[type=text] {
      width: 100%;
      padding: 10px;
      margin: 5px 0 22px 0;
      border: none;
      background: #eee;
      }
      /* When the inputs get focus, do something */
      
      /* Style submit/login button */
      .form-container .btn {
      background-color: #8ebf42;
      color: #fff;
      padding: 12px 20px;
      border: none;
      cursor: pointer;
      width: 100%;
      margin-bottom:10px;
      opacity: 0.8;
      }
      /* Style cancel button */
      .form-container .cancel {
      background-color: #cc0000;
      }
      /* Hover effects for buttons */
      .form-container .btn:hover, .open-button:hover {
      opacity: 1;
      }

      
 .bput {border-collapse: collapse; margin:25px 0; font-size:0.9em; min-width:200px; width:100%; border: 1px black; border-radius: 5px 5px 0 0; overflow: hidden;}
 .bput thead tr {background-color: green; color: white; text-align: left; font-weight: bold;}
 .bput th{padding: 12px 15px;color: white;}
 .bput td {padding: 12px 15px;color: black;}
 .bput tbody tr {border-bottom: 1px solid grey;}
 .bput tbody tr:nth-of-type(even){
 background-color: #f3f3f3;
 }
 .bput tbody tr:last-of-type {border-bottom: 2px solid green;}


</style>
<SCRIPT type="text/javascript">
    window.history.forward();
    function noBack() { window.history.forward(); }
</SCRIPT>
<meta charset="ISO-8859-1">
<title>Update/Edit Results here</title>

</head>
<body oncontextmenu="return false;">
<header class="h" style="border-radius: 15px;">
   <br>
   <br><div class="logo">
        <img src="images/do.jpg">
      </div>
<center><br><br>
<h1><b><i style="color:white;font-size:2vw;">Exam Section</i></b></h1></center><br>
</header><br>

<form method="post" action="c4thupdateresult.php">
<br>
<center>
<h3 style="background-color:#444;color: white;opacity: 0.8;">Edit/Update Result</h3></center><hr>
<br><center>

<table style="border=1" width="80%" cellpadding=8 cellspacing=8>
<tr style="background-color: dodgerblue;color: white;"><th>Si.no</th>
<th >Student reg.no</th>
<th>Student Name</th>
<th>Choose semester</th>
<th>Internal Result</th>
<th>Edit/Update</th>
<th>Upload Result</th>
</tr>
<tr>
<td style="background-color: mediumseagreen;color:black;text-align: center;">1</td>
<td style="background-color: mediumseagreen;color:white;text-align: center;border-radius: 15px;">14332535</td>
<td style="background-color: mediumseagreen;color:white;text-align: center;border-radius: 15px;">sfa</td>

<td style="color:white;text-align: center;">
   
<select id="box" class="o">
            
         <option style="color:white;background-color: grey">--------------Semester------------</option>
         <option style="color:white;" value="1st">1st sem</option>
         <option style="color:white;" value="2nd">2nd sem</option>
         <option style="color:white;" value="3rd">3rd sem</option>
         <option style="color:white;" value="4th">4th sem</option>
         <option style="color:white;" value="5th">5th sem</option>
         <option style="color:white;" value="6th">6th sem</option>
         <option style="color:white;" value="7th">7th sem</option>
         <option style="color:white;" value="8th">8th sem</option>
      </select>

</td>
<td style="color:white;text-align: center;">
   
   <select id="box" class="o">
            
         <option style="color:white;background-color: grey">--------------Internal------------</option>
         <option style="color:white;" value="1st">1st</option>
         <option style="color:white;" value="2nd">2nd</option>
         <option style="color:white;" value="3rd">3rd</option>
         <option style="color:white;" value="4th">4th</option>
      </select>
</td>
<td  style="color:white;text-align: center;">
<input type="button" class="open-button" value="Open" onclick="openForm()">
<div class="login-popup">
   <div class="form-popup" id="popupForm">

      <table class="form-container bput" id="popupForm" Rules="all">
 <thead>
 <h3>
 <tr>
 <th>S.No</th>
 <th>Subject Code</th>
 <th>Subject</th>
 <th>T/P</th>
 <th>Credit</th>
 <th>Grade</th>
 <th>Edit/Update</th>
 </tr>
 </h3>
 </thead>
 <tbody>
 <tr>
 <td>1</td>
 <td></td><td></td><td></td><td></td><td></td><td></td>
 </tr>
 <tr>
 <td>2</td>
 <td></td><td></td><td></td><td></td><td></td><td></td>
 </tr>
 <tr>
 <td>3</td>
 <td></td><td></td><td></td><td></td><td></td><td></td>
 </tr>
 <tr>
 <td>4</td>
 <td></td><td></td><td></td><td></td><td></td><td></td>
 </tr>
 <tr>
 <td>5</td>
 <td></td><td></td><td></td><td></td><td></td><td></td>
 </tr>
 <tr>
 <td>6</td>
 <td></td><td></td><td></td><td></td><td></td><td></td>
 </tr>
 <tr>
 <td>7</td>
 <td></td><td></td><td></td><td></td><td></td><td></td>
 </tr>
 <tr style="background-color: mediumseagreen;">
 <td style="font-size: 20px;color:white;">Total</td>
 <td></td>
 <td></td>
 <td></td>
 <td></td>
 <td></td>
 <td></td>
 </tr>
 </tbody>
 </table><br>



<input type="button" class="button button3" value="Submit">
          <button type="button" class="button button2" onclick="closeForm()">Close</button>
</div></div>
</td>
<td style="color:white;text-align: center;">
<input type="file" class="button button1" value="Upload" >
</td>
</tr>
<tr>
<td style="background-color: mediumseagreen;color:black;text-align: center;">2</td>
<td style="background-color: mediumseagreen;color:white;text-align: center;border-radius: 15px;">3542352</td>
<td style="background-color: mediumseagreen;color:white;text-align: center;border-radius: 15px;">sfa</td>
<td style="color:white;text-align: center;">
   
<select id="box" class="o">
            
         <option style="color:white;background-color: grey">--------------Semester------------</option>
         <option value="1st">1st sem</option>
         <option value="2nd">2nd sem</option>
         <option value="3rd">3rd sem</option>
         <option value="4th">4th sem</option>
         <option value="5th">5th sem</option>
         <option value="6th">6th sem</option>
         <option value="7th">7th sem</option>
         <option value="8th">8th sem</option>
      </select>

</td>
<td style="color:white;text-align: center;">
   
<select id="box" class="o">
            
         <option style="color:white;background-color: grey">--------------Internal------------</option>
         <option style="color:white;" value="1st">1st</option>
         <option style="color:white;" value="2nd">2nd</option>
         <option style="color:white;" value="3rd">3rd</option>
         <option style="color:white;" value="4th">4th</option>
      </select>

</td>
<td style="color:white;text-align: center;">
   
<input type="button" class="open-button" value="Open" onclick="openForm()">
<div class="login-popup">
   <div class="form-popup" id="popupForm">

      <table class="form-container bput" id="popupForm" Rules="all">
 <thead>
 <h3>
 <tr>
 <th>S.No</th>
 <th>Subject Code</th>
 <th>Subject</th>
 <th>T/P</th>
 <th>Credit</th>
 <th>Grade</th>
 <th>Edit/Update</th>
 </tr>
 </h3>
 </thead>
 <tbody>
 <tr>
 <td>1</td>
 <td></td><td></td><td></td><td></td><td></td><td></td>
 </tr>
 <tr>
 <td>2</td>
 <td></td><td></td><td></td><td></td><td></td><td></td>
 </tr>
 <tr>
 <td>3</td>
 <td></td><td></td><td></td><td></td><td></td><td></td>
 </tr>
 <tr>
 <td>4</td>
 <td></td><td></td><td></td><td></td><td></td><td></td>
 </tr>
 <tr>
 <td>5</td>
 <td></td><td></td><td></td><td></td><td></td><td></td>
 </tr>
 <tr>
 <td>6</td>
 <td></td><td></td><td></td><td></td><td></td><td></td>
 </tr>
 <tr>
 <td>7</td>
 <td></td><td></td><td></td><td></td><td></td><td></td>
 </tr>
 <tr style="background-color: mediumseagreen;">
 <td style="font-size: 20px;color:white;">Total</td>
 <td></td>
 <td></td>
 <td></td>
 <td></td>
 <td></td>
 <td></td>
 </tr>
 </tbody>
 </table><br>



<input type="button" class="button button3" value="Submit">
          <button type="button" class="button button2" onclick="closeForm()">Close</button>
</div></div>

</td>
<td style="color:white;text-align: center;">
<input type="file" class="button button1" value="Upload" >
</td>
</tr>
<tr>
<td style="background-color:mediumseagreen;color:black;text-align: center;">3</td>
<td style="background-color:mediumseagreen;color:white;text-align: center;border-radius: 15px;">32253523</td>
<td style="background-color: mediumseagreen;color:white;text-align: center;border-radius: 15px;">dh</td>

<td style="color:white;text-align: center;">
   
<select id="box" class="o">
            
         <option style="color:white;background-color: grey">--------------Semester------------</option>
         <option value="1st">1st sem</option>
         <option value="2nd">2nd sem</option>
         <option value="3rd">3rd sem</option>
         <option value="4th">4th sem</option>
         <option value="5th">5th sem</option>
         <option value="6th">6th sem</option>
         <option value="7th">7th sem</option>
         <option value="8th">8th sem</option>
      </select>

</td>
<td style="color:white;text-align: center;">
   
<select id="box" class="o">
            
         <option style="color:white;background-color: grey">--------------Internal------------</option>
         <option style="color:white;" value="1st">1st</option>
         <option style="color:white;" value="2nd">2nd</option>
         <option style="color:white;" value="3rd">3rd</option>
         <option style="color:white;" value="4th">4th</option>
      </select>

</td>
<td style="color:white;text-align: center;">
   
<input type="button" class="open-button" value="Open" onclick="openForm()">
<div class="login-popup">
   <div class="form-popup" id="popupForm">

      <table class="form-container bput" id="popupForm" Rules="all">
 <thead>
 <h3>
 <tr>
 <th>S.No</th>
 <th>Subject Code</th>
 <th>Subject</th>
 <th>T/P</th>
 <th>Credit</th>
 <th>Grade</th>
 <th>Edit/Update</th>
 </tr>
 </h3>
 </thead>
 <tbody>
 <tr>
 <td>1</td>
 <td></td><td></td><td></td><td></td><td></td><td></td>
 </tr>
 <tr>
 <td>2</td>
 <td></td><td></td><td></td><td></td><td></td><td></td>
 </tr>
 <tr>
 <td>3</td>
 <td></td><td></td><td></td><td></td><td></td><td></td>
 </tr>
 <tr>
 <td>4</td>
 <td></td><td></td><td></td><td></td><td></td><td></td>
 </tr>
 <tr>
 <td>5</td>
 <td></td><td></td><td></td><td></td><td></td><td></td>
 </tr>
 <tr>
 <td>6</td>
 <td></td><td></td><td></td><td></td><td></td><td></td>
 </tr>
 <tr>
 <td>7</td>
 <td></td><td></td><td></td><td></td><td></td><td></td>
 </tr>
 <tr style="background-color: mediumseagreen;">
 <td style="font-size: 20px;color:white;">Total</td>
 <td></td>
 <td></td>
 <td></td>
 <td></td>
 <td></td>
 <td></td>
 </tr>
 </tbody>
 </table><br>



<input type="button" class="button button3" value="Submit">
          <button type="button" class="button button2" onclick="closeForm()">Close</button>
</div></div>

</td>
<td style="color:white;text-align: center;">
<input type="file" class="button button1" value="Upload" >
</td>
</tr>
<tr>
<td style="background-color: mediumseagreen;color:black;text-align: center;">4</td>
<td style="background-color: mediumseagreen;color:white;text-align: center;border-radius: 15px;">211421</td>
<td style="background-color: mediumseagreen;color:white;text-align: center;border-radius: 15px;">d</td>

<td style="color:white;text-align: center;">
   
<select id="box" class="o">
            
         <option style="color:white;background-color: grey">--------------Semester------------</option>
         <option value="1st">1st sem</option>
         <option value="2nd">2nd sem</option>
         <option value="3rd">3rd sem</option>
         <option value="4th">4th sem</option>
         <option value="5th">5th sem</option>
         <option value="6th">6th sem</option>
         <option value="7th">7th sem</option>
         <option value="8th">8th sem</option>
      </select>

</td>
<td style="color:white;text-align: center;">
   
<select id="box" class="o">
            
         <option style="color:white;background-color: grey">--------------Internal------------</option>
         <option style="color:white;" value="1st">1st</option>
         <option style="color:white;" value="2nd">2nd</option>
         <option style="color:white;" value="3rd">3rd</option>
         <option style="color:white;" value="4th">4th</option>
      </select>

</td>
<td style="color:white;text-align: center;">
   
<input type="button" class="open-button" value="Open" onclick="openForm()">
<div class="login-popup">
   <div class="form-popup" id="popupForm">

      <table class="form-container bput" id="popupForm" Rules="all">
 <thead>
 <h3>
 <tr>
 <th>S.No</th>
 <th>Subject Code</th>
 <th>Subject</th>
 <th>T/P</th>
 <th>Credit</th>
 <th>Grade</th>
 <th>Edit/Update</th>
 </tr>
 </h3>
 </thead>
 <tbody>
 <tr>
 <td>1</td>
 <td></td><td></td><td></td><td></td><td></td><td></td>
 </tr>
 <tr>
 <td>2</td>
 <td></td><td></td><td></td><td></td><td></td><td></td>
 </tr>
 <tr>
 <td>3</td>
 <td></td><td></td><td></td><td></td><td></td><td></td>
 </tr>
 <tr>
 <td>4</td>
 <td></td><td></td><td></td><td></td><td></td><td></td>
 </tr>
 <tr>
 <td>5</td>
 <td></td><td></td><td></td><td></td><td></td><td></td>
 </tr>
 <tr>
 <td>6</td>
 <td></td><td></td><td></td><td></td><td></td><td></td>
 </tr>
 <tr>
 <td>7</td>
 <td></td><td></td><td></td><td></td><td></td><td></td>
 </tr>
 <tr style="background-color: mediumseagreen;">
 <td style="font-size: 20px;color:white;">Total</td>
 <td></td>
 <td></td>
 <td></td>
 <td></td>
 <td></td>
 <td></td>
 </tr>
 </tbody>
 </table><br>



<input type="button" class="button button3" value="Submit">
          <button type="button" class="button button2" onclick="closeForm()">Close</button>
</div></div>

</td>
<td style="color:white;text-align: center;">
<input type="file" class="button button1" value="Upload" >
</td>
</tr>

</table><br>



</center>
<br><hr>
<center>
<input type="button" class="button button3" value="< Previous Page" onclick="location.href='c4thadminhomepage.php' "  ></center>
</form>

<br>
 <script>
      function openForm() {
        document.getElementById("popupForm").style.display="block";
      }
      
      function closeForm() {
        document.getElementById("popupForm").style.display="none";
      }
    </script>
<footer class="f" style="border-radius:15px;" >
<MARQUEE style="color:white; background-color: red;"><b>NOTICES</b>:</MARQUEE><br>
<br><center><h4 style="color:white;font-size:2vw;">@All rights Reserved &nbsp;&nbsp;&nbsp;Powered by GitamStudents</h4></center>
</footer>

</body>
</html>