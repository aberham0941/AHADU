<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>AHADU || PAY YOUR BILLS ONLINE </title>
<link  rel="stylesheet" href="css/bootstrap.min.css"/>
 <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>    
 <link rel="stylesheet" href="css/main.css">
 <link  rel="stylesheet" href="css/font.css">
 <script src="js/jquery.js" type="text/javascript"></script>

  <script src="js/bootstrap.min.js"  type="text/javascript"></script>
 	<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
<?php if(@$_GET['w'])
{echo'<script>alert("'.@$_GET['w'].'");</script>';}
?>
<script>
function validateForm() {
    var y = document.forms["form"]["name"].value;	
    var letters = /^[A-Za-z]+$/;if (y == null || y == "")
     {alert("Name must be filled out.");return false;}
     var z =document.forms["form"]["houseno"].value;if (z == null || z == "")
      {alert("houseno must be filled out.");return false;}
      var x = document.forms["form"]["email"].value;
      var atpos = x.indexOf("@");
var dotpos = x.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) 
{alert("Not a valid e-mail address.");return false;}
var a = document.forms["form"]["password"].value;if(a == null || a == ""){alert("Password must be filled out");
return false;}
if(a.length<5 || a.length>25)
{alert("Passwords must be 5 to 25 characters long.");return false;}
var b = document.forms["form"]["cpassword"].value;
if (a!=b){alert("Passwords must match.");return false;}}
</script>


</head>

<body>
<div class="header">
<div class="row">
<div class="col-lg-6">
<span class="logo">PAY YOUR BILLS ONLINE EASILY</span></div>

<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content title1">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title title1"><span style="color:orange">Log In</span></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="login.php?q=index.php" method="POST">
<fieldset>


<div class="form-group">
  <label class="col-md-3 control-label" for="email"></label>  
  <div class="col-md-6">
  <input id="email" name="email" placeholder="Enter your email-id" class="form-control input-md" type="email">
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-3 control-label" for="password"></label>
  <div class="col-md-6">
    <input id="password" name="password" placeholder="Enter your Password" class="form-control input-md" type="password">
    
  </div>
</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Log in</button>
		</fieldset>
</form>
      </div>
    </div>
  </div>
</div>


</div>
</div>

<div class="bg1">
<div class="row">

<div class="col-md-7"></div>
<div class="col-md-4 panel">
  <form class="form-horizontal" name="form" action="sign.php?q=account.php" onSubmit="return validateForm()" method="POST">
<fieldset>


<div class="form-group">
  <label class="col-md-12 control-label" for="name"></label>  
  <div class="col-md-12">
  <input id="name" name="name" placeholder="Enter your name" class="form-control input-md" type="text">
  </div>
</div>

<div class="form-group">
  <label class="col-md-12 control-label" for="subcity"></label>
  <div class="col-md-12">
  <title> sub city</title>
    <select id="subcity" name="subcity" placeholder="Enter your subcity" class="form-control input-md" >
   <option value=" ">subcity</option>
  <option value="kirkos">KIRKOS</option>
  <option value="ledeta">LEDETA</option>
  <option value="kolfe">KOLFE</option>
  <option value="yeka">YEKA</option>
  <option value="arada">ARADA</option>
  <option value="bole">BOLE</option>
  <option value="lafto">LAFTO</option> </select>
  </div>
</div>

<div class="form-group">
  <label class="col-md-12 control-label" for="name"></label>  
  <div class="col-md-12">
  <input id="houseno" name="houseno" placeholder="Enter your houseno name" class="form-control input-md" type="text">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-12 control-label title1" for="email"></label>
  <div class="col-md-12">
    <input id="email" name="email" placeholder="Enter your email-id" class="form-control input-md" type="email">
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-12 control-label" for="gender"></label>
  <div class="col-md-12">
    <select id="gender" name="gender" placeholder="Enter your gender" class="form-control input-md" >
   <option value="Male">BANK</option>
  <option value="CBE">COMMERCIAL BANK OF ETHIOPIAN</option>
  <option value="DB">DASHEN BANK</option>
  <option value="AIB">AWASH INTERNATIONAL BANK</option> </select>
  </div>
</div>

<div class="form-group">
  <label class="col-md-12 control-label" for="mob"></label>  
  <div class="col-md-12">
  <input id="mob" name="mob" placeholder="Enter your mobile number" class="form-control input-md" type="number">
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-12 control-label" for="password"></label>
  <div class="col-md-12">
    <input id="password" name="password" placeholder="Enter your password" class="form-control input-md" type="password">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-12control-label" for="cpassword"></label>
  <div class="col-md-12">
    <input id="cpassword" name="cpassword" placeholder="Conform Password" class="form-control input-md" type="password">
    
  </div>
</div>
<?php if(@$_GET['q7'])
{ echo'<p style="color:red;font-size:15px;">'.@$_GET['q7'];}?>

<div class="form-group">
  <label class="col-md-12 control-label" for=""></label>
  <div class="col-md-12"> 
    <input  type="submit" class="sub" value="sign up" class="btn btn-primary"/>
  </div>
  <div class="col-md-2 col-md-offset-4">
<a href="#" class="pull-right btn sub1" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Signin</b></span></a></div>
</div>

</fieldset>
</form>
</div>
</div></div>
</div>

<div class="row footer">
<div class="col-md-3 box">
<a href="aboutus" target="_blank">About us</a>
</div>

<a href="#" data-toggle="modal" data-target="#developers">Developers</a>
<div class="col-md-3 box">
<a href="feedback.php" target="_blank">Feedback</a>
</div>
</div>
</div>

<div class="modal fade title1" id="developers">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" style="font-family:'typo' "><span style="color:orange">Developers</span></h4>
      </div>
	  
      <div class="modal-body">
        <p>
		<div class="row">
		<div class="col-md-4">
		 <img src="image/CAM00121.jpg" width=100 height=100 alt=" ASTU 3RD YEAR CSE FSE PROJECT " class="img-rounded">
		 </div> 
		 <div class="col-md-5">
		<a href="http://facebook/cse/astu.blogspot.in" style="color:#202020; font-family:'typo' ; font-size:18px" title="Find on Facebook">astu cse 3rd year</a>
		<h4 style="color:#202020; font-family:'typo' ;font-size:16px" class="title1"> +251 94105818  0939976956 </h4>
		<h4 style="font-family:'typo' ">astu.cse.3rd.sec3@gmail.com</h4>
		<h4 style="font-family:'typo' ">ADAMA SCIENCE AND TECHNOLOGY UNIVERSITY, DEPARTMENT OF CSE 3RD YEAR,ADAMA</h4></div></div>
		</p>
      </div>
    </div>
  </div>
</div>

</div><div class="col-md-3"></div></div>
      </div>
    </div>
  </div>
</div>


</body>
</html>

