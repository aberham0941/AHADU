<?php
if (isset($_POST['add']))
	{	   
		
		include 'db.php';
			 		
					$lname= $_POST['lname'] ;					
					$fname=$_POST['fname'] ;
					$mi=$_POST['mi'] ;
					$subcity=$_POST['subcity'] ;
					$houseno=$_POST['houseno'] ;
					$meterReader = $_POST['meterReader'];
					
		 mysqli_query($conn,"INSERT INTO  owners (lname,fname,mi,subcity,houseno) 
		 VALUES ('$lname','$fname','$mi','$subcity','$houseno')"); 
		 mysqli_query($conn,"INSERT INTO  tempo_bill (Client,Prev)
		 VALUES ('$fname','$meterReader')");
				
				header("Location: clients.php");
				
				
	        }
	
?>
<?php
		include 'db.php';

if (isset($_POST['add']))
	{	   
		include 'dbconnection.php';
					$lname= $_POST['lname'] ;					
					$fname=$_POST['fname'] ;
					$mi=$_POST['mi'] ;
					$subcity=$_POST['subcity'] ;
					$houseno=$_POST['houseno'] ;
					$meterReader = $_POST['meterReader'];
					$X="ACTIVE";
		 mysqli_query($conn,"INSERT INTO  notifications (id,name,type,message,status,date) 
		 VALUES ('','$lname','$fname','$mi','$subcity','$houseno')"); 
		
		mysqli_query($conn,"UPDATE userbalance SET status='$X' WHERE houseno='$houseno'"); 
		   
				
				
	        }
	
            ?>