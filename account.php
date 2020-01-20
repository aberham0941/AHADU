<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php
    include("functions.php");

?>
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

</head>


<?php
include_once 'dbConnection.php';
?>
<body>
<div class="header">
<div class="row">
<div class="col-lg-6">
<span class="logo">PAY YOUR BILLS</span></div>
<div class="col-md-4 col-md-offset-2">
</div>
</div>
</div>
</div>
<div class="bg">

<!--navigation menu-->
<nav class="navbar navbar-default title1">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
    <?php
 include_once 'dbConnection.php';
session_start();
  if(!(isset($_SESSION['email']))){
header("location:index.php");

}
else
{
$name = $_SESSION['name'];
$email=$_SESSION['email'];

include_once 'dbConnection.php';
echo '<span class="pull-right top title1" ><span class="log1"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;Hello,</span> <a href="account.php?q=1" class="log log1">'.$name.'</a>&nbsp;|&nbsp;<a href="logout.php?q=account.php" class="log"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;Signout</button></a></span>';

}?>

<button type="button" class="navbar-toggle collapsed">
        <span class="sr-only">NOTIFICATION</span>
        <span class="icon-bar"></span>
        
      </button>

      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><b>AHADU_ACCOUNT</b></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li <?php if(@$_GET['q']==1) echo'class="active"'; ?> ><a href="account.php?q=1"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;Home<span class="sr-only">(current)</span></a></li>
    <li <?php if(@$_GET['q']==3) echo'class="active"'; ?>><a href="account.php?q=3"><span class="glyphicon glyphicon-stats" aria-hidden="true"></span>&nbsp;BILL INFO</a></li>
    <li <?php if(@$_GET['q']==2) echo'class="active"'; ?>><a href="account.php?q=2"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>&nbsp;PAYMENT RECIPT</a></li>
    <li <?php if(@$_GET['q']==4) echo'class="active"'; ?>><a href="account.php?q=4"><span class="glyphicon glyphicon-stats" aria-hidden="true"></span>&nbsp;COMPLAIN</a></li>
    <li <?php if(@$_GET['q']==5) echo'class="active"'; ?>><a href="account.php?q=5"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>&nbsp;EMERGENCY ANNOUNCEMENT</a></li>
    <li <?php if(@$_GET['q']==6) echo'class="active"'; ?>><a href="account.php?q=6"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>&nbsp;TRANSACTION HISTORY</a></li>

		<li class="pull-right"> <a href="logout.php?q=account.php"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;Signout</a></li>
		</ul>
            <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="ENTER YOUR ID ">
        </div>
        <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search" aria-hidden="true"></span>&nbsp;Search</button>
      </form>
      </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav><!--navigation menu closed-->
<div class="container"><!--container start-->
<div class="row">
<div class="col-md-12">

<!--home start-->

<?php 
 if(@$_GET['q']==1) {

$result = mysqli_query($con,"SELECT balance FROM userbalance where email='$email'") or die('Error');
$result1 = mysqli_query($con,"SELECT status FROM userbalance where email='$email'") or die('Error');
echo '<div class="panel" style="margin:10%">';
while($row=mysqli_fetch_array($result) )
{
$balance=$row['balance'];
echo '<b><h3> YOUR CURRENT BALANCE IS &nbsp;<h1>'.$balance.  '   ETB</h1>&nbsp; </h3><br/></b>';
;
}
while($row=mysqli_fetch_array($result1) )
{
$status=$row['status'];
echo '<b><h3> YOUR CURRENT STATUS IS &nbsp;<h1>'.$status.'</h1>&nbsp;</h3><br/></b>';
;
}
}?>

<?php

//billinfo start
 if(@$_GET['q']==3) {

    $result = mysqli_query($con,"SELECT * FROM billtype") or die('Error');
    echo  '<div class="panel"><div class="table-responsive"><table class="table table-striped title1">
    <tr><td><b>NO</b></td><td><b>BILL TYPE</b></td><td><b>COMAPNY-HASH</b></td><td><b>BILL TAG</b></td><td><b>Time limit(DUEDATE)</b></td><td></td></tr>';
    $c=1;
    while($row = mysqli_fetch_array($result)) {
        $title = $row['billtype'];
        $total = $row['hash'];
        $sahi = $row['tag'];
        $time = $row['duedate'];
        $eid = $row['companyid'];
    $q12=mysqli_query($con,"SELECT * FROM billtype" )or die('Error98');
    $rowcount=mysqli_num_rows($q12);	
    if($rowcount =! 0){
        echo '   
        <tr><td>'.$c++.'</td><td>'.$title.'</td><td>'.$total.'</td><td>'.$sahi.'</td><td>'.$time.'&nbsp;min</td>';
       
    }
    else
    {
    echo 'your are not accessed';
    }
    }
    $c=0;
    echo '</table></div></div>';
echo  '<td><b><a href="account.php?q=quiz&step=2&eid='.$eid.'&n=1&t='.$total.'" class="pull-right btn sub1" style="margin:100px;background:#99cc32"><span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>&nbsp;<span class="title1"><b>ACCESS BILLS</b></span></a></b></td></tr>';
    }?>

<?php
if(@$_GET['q']== 'quiz' && @$_GET['step']== 2) {
echo '<div class="panel" style="margin:10%">
<form class="form-horizontal" action="viewbill.php?q=index.php" method="POST">
<fieldset>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="subcity"></label>  
  <div class="col-md-6">
  <select id="billtype" name="subcity" placeholder="Enter your subcity" class="form-control input-md" >
  <option value=" ">SUBCITY</option>
  <option value="kirkos">KIRKOS</option>
  <option value="ledeta">LEDETA</option>
  <option value="kolfe">KOLFE</option>
  <option value="yeka">YEKA</option>
  <option value="arada">ARADA</option>
  <option value="bole">BOLE</option>
  <option value="lafto">LAFTO</option> </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="billtype"></label>  
  <div class="col-md-6">
  <select id="billtype" name="billtype" placeholder="Enter your billtype" class="form-control input-md" >
   <option value=" ">BILLTYPE</option>
  <option value="WATER_BILL">WATER_BILL</option>
  <option value="ELECTRIC_BILL">ELECTRIC_BILL</option>
  <option value="MOBILE_BILL">MOBILE</option>
  <option value="DSTV">DSTV</option>
  <option value="OTHER SERVICES">OTHER SERVICE</option>

  </div>
</div>


<!-- Password input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="houseno"></label>
  <div class="col-md-6">
    <input id="houseno" name="houseno" placeholder="Enter your houseno" class="form-control input-md" type="houseno">
    
  </div>
</div>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">RETIVE BILL INFO</button>
		</fieldset>
</form>';

}
?>

</div>
</div>
</div>
</div>

<div class="row footer">
<div class="col-md-3 box">
<a href="aboutus" target="_blank">About us</a>

<a href="#" data-toggle="modal" data-target="#developers">Developers</a>
</div>
<div class="col-md-3 box">
<a href="feedback.php" target="_blank">Feedback</a></div></div>

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
		<h4 style="color:#202020; font-family:'typo' ;font-size:16px" class="title1">+251 94105818  0939976956 </h4>>
		<h4 style="font-family:'typo' ">astu.cse.3rd.sec3@gmail.com</h4>
		<h4 style="font-family:'typo' ">ADAMA SCIENCE AND TECHNOLOGY UNIVERSITY, DEPARTMENT OF CSE 3RD YEAR,ADAMA</h4></div></div>
		</p>
      </div>
    
    </div>
  </div>
</div>

</div><div class="col-md-3">
</div>
</div>
      </div>
     
    </div>
  </div>
</div>



</body>
</html>





