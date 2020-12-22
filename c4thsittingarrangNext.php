
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
  background-image: url("images/bg02.jpg");position: absolute;width: 100%;height: 100px;opacity: 0.9;bottom: 0;
}

}
.button
{
border:none;
text-align:center;
text-decoration:none;
display:inline-block;
font-size:120px;
margin:4px 2px;
cursor:pointer;
border-radius:8px;opacity: 0.9;
}
.button1
{background-color:green;padding: 34px 60px;
color:white;}
.button1:hover{
  background-color:#444;}

.button2
{background-color:red;
color:white;padding: 11px 32px;
}
.button2:hover{
  background-color:#111;}
  
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

 

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  

</head>

<body class="body" oncontextmenu="return false;">
<header class="h" style="border-radius:15px;opacity: 0.9;">
  <br><div class="logo">
        <img src="images/do.jpg">
      </div>
<center><br><br>
<h1><b><i style="color: white;opacity: 0.9;">Exam Section</i></b></h1></center><br>
</header><br>
    <!--header end--><center>
<BR><h3 style="background-color:#444;color: white;">Sitting Arrangement panel</h3><hr></center>
<form action="c4thsittingarrangNext_submit" method="post" >

   
      <section class="wrapper" style="background-color: grey;opacity: 0.8;">
        <b style="color: white;font-size: 1vw;"><i class="fa fa-angle-right"></i> Put last 4 digit of registration numbers of candidates</b>
        <div class="row">
          <div class="col-md-12">
            <div class="content-panel">
              <i class="fa fa-angle-right" style="font-size: 1vw;"></i><b style="font-size: 1vw;">One candidate per bench</b>
              <hr style="color: black;background-color: black;">
               <br><h3><b style="font-size: 1vw;">Hall number:</b></h3>
              <br><h3><b style="font-size: 1vw;">Starting 6 digit of registeration number are:</b></h3><br><table class="table" style="font-size: 1vw;" >
                <thead>
                  <tr>
                    <th></th>
                    <th>Row 1</th>
                    <th>Row 2</th>
                    <th>Row 3</th>
                    <th>Row 4</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td><input type="text" maxlength="4"></td>
                    <td><input type="text" maxlength="4"></td>
                    <td><input type="text" maxlength="4"></td>
                     <td><input type="text" maxlength="4"></td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td><input type="text" maxlength="4"></td>
                    <td><input type="text" maxlength="4"></td>
                    <td><input type="text" maxlength="4"></td>
                     <td><input type="text" maxlength="4"></td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td><input type="text" maxlength="4"></td>
                    <td><input type="text" maxlength="4"></td>
                    <td><input type="text" maxlength="4"></td>
                     <td><input type="text" maxlength="4"></td>
                  </tr>
                   <tr>
                    <td>4</td>
                    <td><input type="text" maxlength="4"></td>
                    <td><input type="text" maxlength="4"></td>
                    <td><input type="text" maxlength="4"></td>
                     <td><input type="text" maxlength="4"></td>
                  </tr> <tr>
                    <td>5</td>
                     <td><input type="text" maxlength="4"></td>
                    <td><input type="text" maxlength="4"></td>
                    <td><input type="text" maxlength="4"></td>
                     <td><input type="text" maxlength="4"></td>
                  </tr> <tr>
                    <td>6</td>
                   <td><input type="text" maxlength="4"></td>
                    <td><input type="text" maxlength="4"></td>
                    <td><input type="text" maxlength="4"></td>
                     <td><input type="text" maxlength="4"></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <!-- /col-md-12 -->
        
          <!-- /col-md-12 -->
        </div><br><br>
        <center><button type="submit" class="btn btn-primary btn-lg" style="font-size: 1vw;">Submit</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <button type="reset" class="btn btn-default btn-lg" style="font-size: 1vw;">Reset</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <button type="button" class="btn btn-primary btn-lg" onclick="location.href='c4thsittingarrang.php'" style="font-size: 1vw;">Back</button></center>
      </section>
    
</form>
   <footer class="f" style="border-radius: 8px;opacity: 0.9;" >
<br>
<br><center><h4 style="color:white;">@All rights Reserved &nbsp;&nbsp;&nbsp;Powered by GitamStudents</h4></center>

</footer>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->
  
</body>

</html>
