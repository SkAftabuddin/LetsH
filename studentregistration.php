<!DOCTYPE html>
<html lang="en">

    
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
.h
{
    background-image: url("images/header.jpg");position:inherit;background-size: cover;height: 200px;opacity:0.9;
}
.f
{
    background-image: url("images/bg02.jpg");position: absolute;width: 100%;height: 200px;opacity:0.9;
}

.button
{
border:none;
text-align:center;
text-decoration:none;
display:inline-block;
font-size:16px;
margin:4px 2px;
cursor:pointer;padding:11px 32px;
border-radius:12px;
}
.button1
{background-color:green;color:powderblue;
}
.button2
{background-color:red;color:white;
}
</style>
<SCRIPT type="text/javascript">
    window.history.forward();
    function noBack() { window.history.forward(); }

</SCRIPT>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Register here</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        

    </head>

    <body oncontextmenu="return false;">

		<!-- Top menu -->
		<header class="h" style="border-radius: 15px">
    



    <br>
    <br><div class="logo">
        <img src="images/do.jpg">
      </div>
      <center>
<h1>
    <b><i style="color: white;font-size:2vw;">Exam Section</i></b></h1></center><br>

</header>
<br><center>
<BR><h3 style="background-color:#444;color: white;opacity: 0.8;">Student Registeration Panel</h3><hr><BR></center>
        <!-- Top content -->
        <div class="top-content">
            <div class="container">
                
                
                
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 form-box">
                    	<form role="form" action="#" method="post" class="f1">

                    		<h3>Register To Exam Section</h3>
                    		<p>Fill in the form to get instant access</p>
                    		<div class="f1-steps">
                    			<div class="f1-progress">
                    			    <div class="f1-progress-line" data-now-value="16.66" data-number-of-steps="3" style="width: 16.66%;"></div>
                    			</div>
                    			<div class="f1-step active">
                    				<div class="f1-step-icon"><i class="fa fa-user"></i></div>
                    				<p>about</p>
                    			</div>
                    			<div class="f1-step">
                    				<div class="f1-step-icon"><i class="fa fa-key"></i></div>
                    				<p>account</p>
                    			</div>
                    		    <div class="f1-step">
                    				<div class="f1-step-icon"><i class="fa fa-twitter"></i></div>
                    				<p>social</p>
                    			</div>
                    		</div>
                    		
                    		<fieldset>
                    		    <h4>Tell us who you are:</h4>
                    			<div class="form-group">
                    			    <label class="sr-only" for="f1-first-name">Your Full name</label>
                                    <input type="text" name="f1-first-name" placeholder="Name..." class="f1-first-name form-control" id="f1-first-name">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="f1">Date of Birth</label>
                                    <input type="date" name="f1" placeholder="Dob..." class="f1" id="f1D">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="f1">Year</label>
                                    <input type="text" name="f1" placeholder="Your Semester..." class="" id="f1Y">
                                
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="f1">Branch</label>
                                    <input type="text" name="f1" placeholder="Your branch..." class="f1" id="f1B">
                                </div>
                                <div class="f1-buttons">
                                    <button type="button" class="btn btn-next">Next</button>
                                </div>
                            </fieldset>

                            <fieldset>
                                <h4>Set up your account:</h4>
                                <div class="form-group">
                                    <label class="sr-only" for="f1">Registration number</label>
                                    <input type="number" step="10" min="0" name="f1" placeholder="Reg no..." class="f1" id="f1R">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="f1-password">Password</label>
                                    <input type="password" name="f1-password" placeholder="Password..." class="f1-password form-control" id="f1-password">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="f1-repeat-password">Repeat password</label>
                                    <input type="password" name="f1-repeat-password" placeholder="Repeat password..." 
                                                        class="f1-repeat-password form-control" id="f1-repeat-password">
                                </div>
                                <div class="f1-buttons">
                                    <button type="button" class="btn btn-previous">Previous</button>
                                    <button type="button" class="btn btn-next">Next</button>
                                </div>
                            </fieldset>

                            <fieldset>
                                <h4>Social Contacts:</h4>
                                <div class="form-group">
                                    <label class="sr-only" for="f1-email">Email ID</label>
                                    <input type="text" name="f1-email" placeholder="Email ID..." class="f1-email form-control" id="f1-email">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="f1">Contact no.</label>
                                    <input type="number" maxlength="10" min="0" name="f1" placeholder="Contact no..." class="f1" id="f1C">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="f1">Additional Contact no.</label>
                                    <input type="number" maxlength="10" min="0" name="f1" placeholder="2nd Contact no...." class="f1" id="f1C2">
                                </div>
                                <div class="f1-buttons">
                                    <button type="button" class="btn btn-previous">Previous</button>
                                    
                                    <button type="submit" class="btn btn-submit" onclick="location.href='studlog.php'">Submit</button>
                                    
                                </div>
                            </fieldset>
                    	
                    	</form>
                    </div>
                </div>
                    
            </div>
        </div><center>
<hr><button type="button" class="button button2" onclick="location.href='Page1.php'">Exit</button></center><br><br><br>
<h4 style="color:white;"><b>*You can change your details anytime after registration</b></h4>
        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/retina-1.1.0.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->
<MARQUEE style="color:white; background-color: red;opacity: 0.9;"><b>NOTICES</b>:</MARQUEE>
<footer class="f">
<br>
<center><h4 style="color:white;font-size:2vw;">@All rights Reserved &nbsp;&nbsp;&nbsp;Powered by GitamStudents</h4></center>

</footer>
    </body>



</html>