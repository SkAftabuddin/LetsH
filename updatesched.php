<!DOCTYPE html>
<html lang="en">

<head>
  <style type="text/css" media="screen">
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
  background-image: url("images/bg02.jpg");position:fixed;width: 100%;height: 100px;opacity: 0.9;bottom:0;
}
.c
{
  border-radius: 12px;
  height:15px;width:15px;
}

.button
{

border:none;
text-align:center;
text-decoration:none;
display:inline-block;
font-size:1vw;
margin:4px 2px;
cursor:pointer;opacity: 0.9;
}
.button1
{
  background-color: red;color:white;padding: 14px 24px;border-radius:12px;
}
.button1:hover{
  background-color:#111;}
  .button2{background-color:green; padding:14px 40px;border-radius:12px;color:white; }
.button2:hover{
  background-color:#111;}
    
  </style>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
 

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="lib/bootstrap-fileupload/bootstrap-fileupload.css" />
  <link rel="stylesheet" type="text/css" href="lib/bootstrap-datepicker/css/datepicker.css" />
  <link rel="stylesheet" type="text/css" href="lib/bootstrap-daterangepicker/daterangepicker.css" />
  <link rel="stylesheet" type="text/css" href="lib/bootstrap-timepicker/compiled/timepicker.css" />
  <link rel="stylesheet" type="text/css" href="lib/bootstrap-datetimepicker/datertimepicker.css" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">


</head>
<body class="body"><header class="h" style=" border-radius:15px;"><br>
  <div class="logo">
        <img src="images/do.jpg">
      </div>
<center><br><br>
<h1><b><i style="color:white;">Exam Section</i></b></h1></center><br>
</header><center>
<BR><h3 style="background-color:#444;color: white;">Set Schedule for Examination</h3><hr><BR></center><br>
  <div class="col-lg-12" >
   <div class="form-panel" >
  <form action="#" class="form-horizontal style-form" >
 <div class="form-group" >
                  <label class="control-label col-md-3" style="font-size: 1vw;"> Set Date Range</label>
                  <div class="col-md-4" ><br>
                    <div class="input-group input-large" data-date="01/01/2014" data-date-format="mm/dd/yyyy" >
                      <input type="text" class="form-control dpd1" name="from" >
                      <span class="input-group-addon" >To</span>
                      <input type="text" class="form-control dpd2" name="to" >
                    </div>
                   
                  </div>
                </div>
                <br>
                
                <br>
                  <div class="form-group" >
                  <label class="control-label col-md-3" style="font-size: 1vw;">Choose Time</label>
                  <div class="col-md-4">
                    <div class="input-group bootstrap-timepicker" >
                      <input type="text" class="form-control timepicker-default" >
                      <span class="input-group-btn" >
                        <button class="btn btn-theme04" type="button" ><i class="fa fa-clock-o"></i></button>
                        </span>
                    </div>
                  </div>
                </div><br>
                 <button type="submit" class="btn btn-success" >Submit</button>
                 <button type="reset" class="btn btn-danger" >Delete</button>
                <br><br><center><b style="font-size: 1vw;">OR choose both simultaneously</b></center>
<br><br>
<div class="form-group" >
                  <label class="control-label col-md-3" style="font-size: 1vw;"> Choose Date and Time</label>
                  <div class="col-md-4" >
                    <div class="input-group date form_datetime-component">
                      <input type="text" class="form-control" readonly="" size="16">
                      <span class="input-group-btn">
                        <button type="button" class="btn btn-theme date-set"><i class="fa fa-calendar"></i></button>
                        </span>
                    </div>
                  </div>
                </div>
<br>
                 <button type="submit" class="btn btn-success" >Submit</button>
                 <button type="reset" class="btn btn-danger" >Delete</button>
                 <center><button   type="button" class="button button1" onclick="location.href='c4thadminupdate.php'" >Back</button></center>
                <br><br>

                 </form><br></div><br>

</div><br><br><br><br><br>
  <footer class="f" style="border-radius: 15px;" >
<MARQUEE style="color: white; background-color: red;"><b>NOTICES:</b></MARQUEE><br>
<br><center><h4 style="color:white;font-size:1vw;">@All rights Reserved &nbsp;&nbsp;&nbsp;Powered by GitamStudents</h4></center>
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
  <script src="lib/jquery-ui-1.9.2.custom.min.js"></script>
  <script type="text/javascript" src="lib/bootstrap-fileupload/bootstrap-fileupload.js"></script>
  <script type="text/javascript" src="lib/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
  <script type="text/javascript" src="lib/bootstrap-daterangepicker/date.js"></script>
  <script type="text/javascript" src="lib/bootstrap-daterangepicker/daterangepicker.js"></script>
  <script type="text/javascript" src="lib/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
  <script type="text/javascript" src="lib/bootstrap-daterangepicker/moment.min.js"></script>
  <script type="text/javascript" src="lib/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
  <script src="lib/advanced-form-components.js"></script>



</body>
</html>