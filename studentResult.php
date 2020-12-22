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
	background-image: url("images/header.jpg");position:inherit;background-size: cover;height: 200px;
}
.f
{
	background-image: url("images/bg02.jpg");position: absolute;width: 100%;height: 200px;
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
color:white;background-color:red;padding: 11px 32px;border-radius:12px;
}
.button1
{background-color:purple;padding: 11px 22px;
color:white;
}
.button2
{
background-color:red;padding: 11px 32px;
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
      background-color: #1c87c9;
      color: white;
      padding: 12px 20px;
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
      left:45%;
      top:5%;
      transform: translate(-45%,5%);
      border: 1px solid #666;
      background-color: white;
      border-radius: 15px;
      z-index: 9;
      width: 45%;
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

 .bput {border-collapse: collapse; margin:25px 0; font-size:0.9em; min-width:200px; width:100%; border: 1px black; border-radius: 5px 5px 0 0; overflow: hidden;}
 .bput thead tr {background-color:green; color: white; text-align: left; font-weight: bold;}
 .bput th,
 .bput td {padding: 12px 15px;}
 .bput tbody tr {border-bottom: 1px solid grey;}
 .bput tbody tr:nth-of-type(even){
 background-color: #f3f3f3;
 }
 .bput tbody tr:last-of-type {border-bottom: 2px solid green;}     
       

</style>
<meta charset="ISO-8859-1">
<title>Result shown here</title>

</head>
<body oncontextmenu="return false;">
<header class="h" style="border-radius: 15px;">
	<br><div class="logo">
        <img src="images/do.jpg">
      </div>
<center><br><br>
<h1><b><i style="color:white;font-size:2vw;">Exam Section</i></b></h1></center><br>
</header><br>

<form method="post" action="studentResult.php">

<center>

<h3 style="background-color: #111;color: white;">
My Results</h3><hr></center>

<center>
<br>
<table style="border=1" width="80%" cellpadding=8 cellspacing=8>
<tr style="background-color:dodgerblue;color: white;"><th>Si.no</th>
<th >Internal result(Sem-wise)</th>
<th>Download</th>
<th>Preview</th>
<th>Print</th>
</tr>

<!-- 1st  -->

<tr>
<td style="background-color: mediumseagreen;color:black;text-align: center;">1</td>
<td style="background-color: mediumseagreen;color:white;text-align: center;border-radius: 15px;">Semester I

<select id="box" class="o">
            
         <option style="color:white;background-color: grey">--------------Internal------------</option>
         <option style="color:white;" value="1st">1st</option>
         <option style="color:white;" value="2nd">2nd</option>
         <option style="color:white;" value="3rd">3rd</option>
         <option style="color:white;" value="4th">4th</option>
      </select>
</td>
<td style="color:white;text-align: center;"><a download="" class="button button1">Download</a></td>
<td style="color:white;text-align: center;"><input type="button" class="open-button" value="Open" onclick="openForm()">
<div class="login-popup">
	<div class="form-popup" id="popupForm">
<table  class="form-container bput" id="popupForm" rules="all">
 <thead>
 <h3>
 <tr>
 <th>S.No</th>
 <th>Subject Code</th>
 <th>Subject</th>
 <th>T/P</th>
 <th>Credit</th>
 <th>Grade</th>
 </tr>
 </h3>
 </thead>
 <tbody>
 <tr>
 <td>1</td>
 <td></td><td></td><td></td><td></td><td></td>
 </tr>
 <tr>
 <td>2</td>
 <td></td><td></td><td></td><td></td><td></td>
 </tr>
 <tr>
 <td>3</td>
 <td></td><td></td><td></td><td></td><td></td>
 </tr>
 <tr>
 <td>4</td>
 <td></td><td></td><td></td><td></td><td></td>
 </tr>
 <tr>
 <td>5</td>
 <td></td><td></td><td></td><td></td><td></td>
 </tr>
 <tr>
 <td>6</td>
 <td></td><td></td><td></td><td></td><td></td>
 </tr>
 <tr>
 <td>7</td>
 <td></td><td></td><td></td><td></td><td></td>
 </tr>
 <tr>
 <td></td>
 <td></td>
 <td></td>
 <td></td>
 <td style="font-size: 20px;color: black;"><b>Total Credit</b>:</td>
 <td style="font-size: 20px;color: black;"><b>SGPA</b>:</td>
 </tr>

 
 </tbody>

 </table>
 <button type="button" class="button button2" onclick="closeForm()">Close</button>
</div></div>





</td>
<td  style="color:white;text-align: center;">
<input type="button" class="button button1"  value="Print" onclick="myPrint();">

 </td>

</tr>

<!-- 2nd  -->

<tr>
<td style="background-color: mediumseagreen;color:black;text-align: center;">2</td>
<td style="background-color: mediumseagreen;color:white;text-align: center;border-radius: 15px;">Semester II

<select id="box" class="o">
            
         <option style="color:white;background-color: grey">--------------Internal------------</option>
         <option style="color:white;" value="1st">1st</option>
         <option style="color:white;" value="2nd">2nd</option>
         <option style="color:white;" value="3rd">3rd</option>
         <option style="color:white;" value="4th">4th</option>
      </select>
</td>
<td style="color:white;text-align: center;"><input type="button" class="button button1" value="Download"></td>
<td style="color:white;text-align: center;">
	<input type="button" class="open-button" value="Open" onclick="openForm()">
<div class="login-popup">
	<div class="form-popup" id="popupForm">
<table  class="form-container bput" id="popupForm" rules="all">
 <thead>
 <h3>
 <tr>
 <th>S.No</th>
 <th>Subject Code</th>
 <th>Subject</th>
 <th>T/P</th>
 <th>Credit</th>
 <th>Grade</th>
 </tr>
 </h3>
 </thead>
 <tbody>
 <tr>
 <td>1</td>
 <td></td><td></td><td></td><td></td><td></td>
 </tr>
 <tr>
 <td>2</td>
 <td></td><td></td><td></td><td></td><td></td>
 </tr>
 <tr>
 <td>3</td>
 <td></td><td></td><td></td><td></td><td></td>
 </tr>
 <tr>
 <td>4</td>
 <td></td><td></td><td></td><td></td><td></td>
 </tr>
 <tr>
 <td>5</td>
 <td></td><td></td><td></td><td></td><td></td>
 </tr>
 <tr>
 <td>6</td>
 <td></td><td></td><td></td><td></td><td></td>
 </tr>
 <tr>
 <td>7</td>
 <td></td><td></td><td></td><td></td><td></td>
 </tr>
 <tr>
 <td></td>
 <td></td>
 <td></td>
 <td></td>
 <td style="font-size: 20px;color: black;"><b>Total Credit</b>:</td>
 <td style="font-size: 20px;color: black;"><b>SGPA</b>:</td>
 </tr>

 
 </tbody>

 </table>
 <button type="button" class="button button2" onclick="closeForm()">Close</button>
</div></div>




</td>
<td style="color:white;text-align: center;"><input type="button" class="button button1"  value="Print" onclick="myPrint();"></td>

</tr>

<!-- 3rd  -->

<tr>
<td style="background-color:mediumseagreen;color:black;text-align: center;">3</td>
<td style="background-color:mediumseagreen;color:white;text-align: center;border-radius: 15px;">Semester III

<select id="box" class="o">
            
         <option style="color:white;background-color: grey">--------------Internal------------</option>
         <option style="color:white;" value="1st">1st</option>
         <option style="color:white;" value="2nd">2nd</option>
         <option style="color:white;" value="3rd">3rd</option>
         <option style="color:white;" value="4th">4th</option>
      </select>
</td>
<td style="color:white;text-align: center;"><input type="button" class="button button1" value="Download"></td>
<td style="color:white;text-align: center;">
	
<input type="button" class="open-button" value="Open" onclick="openForm()">
<div class="login-popup">
	<div class="form-popup" id="popupForm">
<table  class="form-container bput" id="popupForm" rules="all">
 <thead>
 <h3>
 <tr>
 <th>S.No</th>
 <th>Subject Code</th>
 <th>Subject</th>
 <th>T/P</th>
 <th>Credit</th>
 <th>Grade</th>
 </tr>
 </h3>
 </thead>
 <tbody>
 <tr>
 <td>1</td>
 <td></td><td></td><td></td><td></td><td></td>
 </tr>
 <tr>
 <td>2</td>
 <td></td><td></td><td></td><td></td><td></td>
 </tr>
 <tr>
 <td>3</td>
 <td></td><td></td><td></td><td></td><td></td>
 </tr>
 <tr>
 <td>4</td>
 <td></td><td></td><td></td><td></td><td></td>
 </tr>
 <tr>
 <td>5</td>
 <td></td><td></td><td></td><td></td><td></td>
 </tr>
 <tr>
 <td>6</td>
 <td></td><td></td><td></td><td></td><td></td>
 </tr>
 <tr>
 <td>7</td>
 <td></td><td></td><td></td><td></td><td></td>
 </tr>
 <tr>
 <td></td>
 <td></td>
 <td></td>
 <td></td>
 <td style="font-size: 20px;color: black;"><b>Total Credit</b>:</td>
 <td style="font-size: 20px;color: black;"><b>SGPA</b>:</td>
 </tr>

 
 </tbody>

 </table>
 <button type="button" class="button button2" onclick="closeForm()">Close</button>
</div></div>


</td>
<td style="color:white;text-align: center;"><input type="button" class="button button1"  value="Print" onclick="myPrint();"></td>

</tr>

<!-- 4th  -->

<tr>
<td style="background-color: mediumseagreen;color:black;text-align: center;">4</td>
<td style="background-color: mediumseagreen;color:white;text-align: center;border-radius: 15px;">Semester IV

<select id="box" class="o">
            
         <option style="color:white;background-color: grey">--------------Internal------------</option>
         <option style="color:white;" value="1st">1st</option>
         <option style="color:white;" value="2nd">2nd</option>
         <option style="color:white;" value="3rd">3rd</option>
         <option style="color:white;" value="4th">4th</option>
      </select>
</td>
<td style="color:white;text-align: center;"><input type="button" class="button button1" value="Download"></td>
<td style="color:white;text-align: center;">
	
<input type="button" class="open-button" value="Open" onclick="openForm()">
<div class="login-popup">
	<div class="form-popup" id="popupForm">
<table  class="form-container bput" id="popupForm" rules="all">
 <thead>
 <h3>
 <tr>
 <th>S.No</th>
 <th>Subject Code</th>
 <th>Subject</th>
 <th>T/P</th>
 <th>Credit</th>
 <th>Grade</th>
 </tr>
 </h3>
 </thead>
 <tbody>
 <tr>
 <td>1</td>
 <td></td><td></td><td></td><td></td><td></td>
 </tr>
 <tr>
 <td>2</td>
 <td></td><td></td><td></td><td></td><td></td>
 </tr>
 <tr>
 <td>3</td>
 <td></td><td></td><td></td><td></td><td></td>
 </tr>
 <tr>
 <td>4</td>
 <td></td><td></td><td></td><td></td><td></td>
 </tr>
 <tr>
 <td>5</td>
 <td></td><td></td><td></td><td></td><td></td>
 </tr>
 <tr>
 <td>6</td>
 <td></td><td></td><td></td><td></td><td></td>
 </tr>
 <tr>
 <td>7</td>
 <td></td><td></td><td></td><td></td><td></td>
 </tr>
 <tr>
 <td></td>
 <td></td>
 <td></td>
 <td></td>
 <td style="font-size: 20px;color: black;"><b>Total Credit</b>:</td>
 <td style="font-size: 20px;color: black;"><b>SGPA</b>:</td>
 </tr>

 
 </tbody>

 </table>
 <button type="button" class="button button2" onclick="closeForm()">Close</button>
</div></div>

</td>
<td style="color:white;text-align: center;"><input type="button" class="button button1"  value="Print" onclick="myPrint();"></td>

</tr>

<!-- 5th  -->

<tr>
<td style="background-color: mediumseagreen;color:black;text-align: center;">5</td>
<td style="background-color: mediumseagreen;color:white;text-align: center;border-radius: 15px;">Semester V

<select id="box" class="o">
            
         <option style="color:white;background-color: grey">--------------Internal------------</option>
         <option style="color:white;" value="1st">1st</option>
         <option style="color:white;" value="2nd">2nd</option>
         <option style="color:white;" value="3rd">3rd</option>
         <option style="color:white;" value="4th">4th</option>
      </select>
</td>
<td style="color:white;text-align: center;"><input type="button" class="button button1" value="Download" ></td>
<td style="color:white;text-align: center;">
	
<input type="button" class="open-button" value="Open" onclick="openForm()">
<div class="login-popup">
	<div class="form-popup" id="popupForm">
<table  class="form-container bput" id="popupForm" rules="all">
 <thead>
 <h3>
 <tr>
 <th>S.No</th>
 <th>Subject Code</th>
 <th>Subject</th>
 <th>T/P</th>
 <th>Credit</th>
 <th>Grade</th>
 </tr>
 </h3>
 </thead>
 <tbody>
 <tr>
 <td>1</td>
 <td></td><td></td><td></td><td></td><td></td>
 </tr>
 <tr>
 <td>2</td>
 <td></td><td></td><td></td><td></td><td></td>
 </tr>
 <tr>
 <td>3</td>
 <td></td><td></td><td></td><td></td><td></td>
 </tr>
 <tr>
 <td>4</td>
 <td></td><td></td><td></td><td></td><td></td>
 </tr>
 <tr>
 <td>5</td>
 <td></td><td></td><td></td><td></td><td></td>
 </tr>
 <tr>
 <td>6</td>
 <td></td><td></td><td></td><td></td><td></td>
 </tr>
 <tr>
 <td>7</td>
 <td></td><td></td><td></td><td></td><td></td>
 </tr>
 <tr>
 <td></td>
 <td></td>
 <td></td>
 <td></td>
 <td style="font-size: 20px;color: black;"><b>Total Credit</b>:</td>
 <td style="font-size: 20px;color: black;"><b>SGPA</b>:</td>
 </tr>

 
 </tbody>

 </table>
 <button type="button" class="button button2" onclick="closeForm()">Close</button>
</div></div>

</td>
<td  style="color:white;text-align: center;">
<input type="button" class="button button1"  value="Print" onclick="myPrint();">

 </td>

</tr>

<!-- 6th  -->

<tr>
<td style="background-color: mediumseagreen;color:black;text-align: center;">6</td>
<td style="background-color: mediumseagreen;color:white;text-align: center;border-radius: 15px;">Semester VI

<select id="box" class="o">
            
         <option style="color:white;background-color: grey">--------------Internal------------</option>
         <option style="color:white;" value="1st">1st</option>
         <option style="color:white;" value="2nd">2nd</option>
         <option style="color:white;" value="3rd">3rd</option>
         <option style="color:white;" value="4th">4th</option>
      </select>
</td>
<td style="color:white;text-align: center;"><input type="button" class="button button1" value="Download"></td>
<td style="color:white;text-align: center;">
	
<input type="button" class="open-button" value="Open" onclick="openForm()">
<div class="login-popup">
	<div class="form-popup" id="popupForm">
<table  class="form-container bput" id="popupForm" rules="all">
 <thead>
 <h3>
 <tr>
 <th>S.No</th>
 <th>Subject Code</th>
 <th>Subject</th>
 <th>T/P</th>
 <th>Credit</th>
 <th>Grade</th>
 </tr>
 </h3>
 </thead>
 <tbody>
 <tr>
 <td>1</td>
 <td></td><td></td><td></td><td></td><td></td>
 </tr>
 <tr>
 <td>2</td>
 <td></td><td></td><td></td><td></td><td></td>
 </tr>
 <tr>
 <td>3</td>
 <td></td><td></td><td></td><td></td><td></td>
 </tr>
 <tr>
 <td>4</td>
 <td></td><td></td><td></td><td></td><td></td>
 </tr>
 <tr>
 <td>5</td>
 <td></td><td></td><td></td><td></td><td></td>
 </tr>
 <tr>
 <td>6</td>
 <td></td><td></td><td></td><td></td><td></td>
 </tr>
 <tr>
 <td>7</td>
 <td></td><td></td><td></td><td></td><td></td>
 </tr>
 <tr>
 <td></td>
 <td></td>
 <td></td>
 <td></td>
 <td style="font-size: 20px;color: black;"><b>Total Credit</b>:</td>
 <td style="font-size: 20px;color: black;"><b>SGPA</b>:</td>
 </tr>

 
 </tbody>

 </table>
 <button type="button" class="button button2" onclick="closeForm()">Close</button>
</div></div>

</td>
<td  style="color:white;text-align: center;">
<input type="button" class="button button1"  value="Print" onclick="myPrint();">

 </td>

</tr>

<!-- 7th  -->

<tr>
<td style="background-color: mediumseagreen;color:black;text-align: center;">7</td>
<td style="background-color: mediumseagreen;color:white;text-align: center;border-radius: 15px;">Semester VII

<select id="box" class="o">
            
         <option style="color:white;background-color: grey">--------------Internal------------</option>
         <option style="color:white;" value="1st">1st</option>
         <option style="color:white;" value="2nd">2nd</option>
         <option style="color:white;" value="3rd">3rd</option>
         <option style="color:white;" value="4th">4th</option>
      </select>
</td>
<td style="color:white;text-align: center;"><input type="button" class="button button1" value="Download"></td>
<td style="color:white;text-align: center;">
	
<input type="button" class="open-button" value="Open" onclick="openForm()">
<div class="login-popup">
	<div class="form-popup" id="popupForm">
<table  class="form-container bput" id="popupForm" rules="all">
 <thead>
 <h3>
 <tr>
 <th>S.No</th>
 <th>Subject Code</th>
 <th>Subject</th>
 <th>T/P</th>
 <th>Credit</th>
 <th>Grade</th>
 </tr>
 </h3>
 </thead>
 <tbody>
 <tr>
 <td>1</td>
 <td></td><td></td><td></td><td></td><td></td>
 </tr>
 <tr>
 <td>2</td>
 <td></td><td></td><td></td><td></td><td></td>
 </tr>
 <tr>
 <td>3</td>
 <td></td><td></td><td></td><td></td><td></td>
 </tr>
 <tr>
 <td>4</td>
 <td></td><td></td><td></td><td></td><td></td>
 </tr>
 <tr>
 <td>5</td>
 <td></td><td></td><td></td><td></td><td></td>
 </tr>
 <tr>
 <td>6</td>
 <td></td><td></td><td></td><td></td><td></td>
 </tr>
 <tr>
 <td>7</td>
 <td></td><td></td><td></td><td></td><td></td>
 </tr>
 <tr>
 <td></td>
 <td></td>
 <td></td>
 <td></td>
 <td style="font-size: 20px;color: black;"><b>Total Credit</b>:</td>
 <td style="font-size: 20px;color: black;"><b>SGPA</b>:</td>
 </tr>

 
 </tbody>

 </table>
 <button type="button" class="button button2" onclick="closeForm()">Close</button>
</div></div>

</td>
<td  style="color:white;text-align: center;">

<input type="button" class="button button1"  value="Print" onclick="myPrint();">
 </td>

</tr>

<!-- 8th  -->

<tr>
<td style="background-color: mediumseagreen;color:black;text-align: center;">8</td>
<td style="background-color: mediumseagreen;color:white;text-align: center;border-radius: 15px;">Semester VIII

<select id="box" class="o">
            
         <option style="color:white;background-color: grey">--------------Internal------------</option>
         <option style="color:white;" value="1st">1st</option>
         <option style="color:white;" value="2nd">2nd</option>
         <option style="color:white;" value="3rd">3rd</option>
         <option style="color:white;" value="4th">4th</option>
      </select>
</td>
<td style="color:white;text-align: center;"><input type="button" class="button button1" value="Download"></td>
<td style="color:white;text-align: center;">
	
<input type="button" class="open-button" value="Open" onclick="openForm()">
<div class="login-popup">
	<div class="form-popup" id="popupForm">
<table  class="form-container bput" id="popupForm" rules="all">

 <thead>
 <h3>

 <tr>
 <th>S.No</th>
 <th>Subject Code</th>
 <th>Subject</th>
 <th>T/P</th>
 <th>Credit</th>
 <th>Grade</th>
 </tr>
 </h3>
 </thead>
 <tbody>
 <tr>
 <td>1</td>
 <td></td><td></td><td></td><td></td><td></td>
 </tr>
 <tr>
 <td>2</td>
 <td></td><td></td><td></td><td></td><td></td>
 </tr>
 <tr>
 <td>3</td>
 <td></td><td></td><td></td><td></td><td></td>
 </tr>
 <tr>
 <td>4</td>
 <td></td><td></td><td></td><td></td><td></td>
 </tr>
 <tr>
 <td>5</td>
 <td></td><td></td><td></td><td></td><td></td>
 </tr>
 <tr>
 <td>6</td>
 <td></td><td></td><td></td><td></td><td></td>
 </tr>
 <tr>
 <td>7</td>
 <td></td><td></td><td></td><td></td><td></td>
 </tr>
 <tr>
 <td></td>
 <td></td>
 <td></td>
 <td></td>
 <td style="font-size: 20px;color: black;"><b>Total Credit</b>:</td>
 <td style="font-size: 20px;color: black;"><b>SGPA</b>:</td>
 </tr>

 
 </tbody>

 </table>
 <button type="button" class="button button2" onclick="closeForm()">Close</button>
</div>
</div>

</td>
<td  style="color:white;text-align: center;">
<input type="button" class="button button1"  value="Print" onclick="myPrint();">

 </td>


</table><br>



</center>
<br>
<center>
	<input type="button" class="button button1" value="Check Semester marks" onclick="location.href='www.bputresult.com'"><br><hr>
	<br>
<input type="button" class="button button2" value="< Prev" onclick="location.href='studentpanel.php' "  ></center>
</form>

<br>
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
<footer class="f" style="border-radius:15px;" >
<MARQUEE style="color:white; background-color: red;"><b>NOTICES</b>:</MARQUEE><br>
<br><center><h4 style="color:white;font-size:2vw;">@All rights Reserved &nbsp;&nbsp;&nbsp;Powered by GitamStudents</h4></center>
</footer>

</body>
</html>