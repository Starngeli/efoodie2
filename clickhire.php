<?php

	include "templates/header.php";
	include "templates/nav.php";
			include_once 'phpscripts/connection.php';
		?>
<!DOCTYPE html>
<html>
<head>
<title>eFooodie</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="layout/styles/layout.css" type="text/css" />
<script type="text/javascript" src="layout/scripts/jquery.min.js"></script>
<script type="text/javascript" src="layout/scripts/jquery.innerfade.js"></script>
</head>
<body id="top">
<div class="wrapper col1">
  <div id="header">
    <div id="logo">
      <h1><a href="loggedin.php">eFoodie</a></h1>
      <p>Hire Chef</p>
    </div>
    
    <div id="topnav">
      <ul>       
		 <li><a href="mybookedrides.php">My Booked Rides</a></li>	
      </ul>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- shows who is logged in -->
<div class="wrapper col2">
<div>
  <p style="margin-left: 70%;"> You are logged in as  <?php echo ($_SESSION['username']) ?><a href="phpscripts/logout.php">  Logout</a></p>	
 
  </div>
</div>
<!-- container -->
<div class="wrapper col3">
  <div id="container">
   <div id="latest">
           <?php 
 $id=$_REQUEST['id'];
$sel=mysql_query("SELECT * FROM registeredrides WHERE rideid=$id");

$fetch=mysql_fetch_array($sel);


?>
		<form  method="post" name="form" onsubmit="return validateForm()">
				  <table border = "0px" height="196" id='mytable'>         
					
						<tr>
							  <td><p style="color:#270c8c; font-size: 14px;">Vehicle Reg</p></td>
							
							  <td><input type="text" name="vehiclereg"  size="30"  id="in" readonly  value="<?php echo $fetch[2] ?>"/></td>
						
							  <td><p style="color:#270c8c; font-size: 14px;">Origin</p></td>
							 
							  <td><input type="text" name="origin" size="30" id="in" readonly value="<?php echo $fetch[3] ?>" /></td>
						</tr>
						<tr>
							  <td><p style="color:#270c8c; font-size: 14px;">Destination</p></td>
							
							  <td><input type="text" name="destination"  size="30"  id="in" readonly value="<?php echo $fetch[4] ?>"/></td>
						
							  <td><p style="color:#270c8c; font-size: 14px;">Driver's Name</p></td>
							 
							  <td><input type="text" name="driver" size="30" id="in" readonly value="<?php echo $fetch[5] ?>" /></td>
						</tr>
						<tr>
							  <td><p style="color:#270c8c; font-size: 14px;">Space Available</p></td>
							
							  <td><input type="text" name="capacity"  size="30"  id="in" readonly value="<?php echo $fetch[6] ?>"/></td>
						
							  <td><p style="color:#270c8c; font-size: 14px;">Departure Date</p></td>
							 
							  <td><input type="date" name="departure" size="30" id="in" readonly value="<?php echo $fetch[7] ?>" /></td>
						</tr>
						<tr>
							  <td></td>
							  <td></td>
							  <td>	
									<input type="submit" value="BOOK NOW"  name="bookride" />
									
									
							  </td>
						</tr>
				  </table>
				     <h2></h2>
			</form>
		
		 <?php
  if (isset($_POST['bookride'])){ 
	
	include_once("connection.php");

$vehiclereg=$_POST['vehiclereg'];
$departure =$_POST['departure'];
$driver=$_POST['driver'];
$origin=$_POST['origin'];
$destination=$_POST['destination'];
$capacity=$_POST['capacity'];
$bywho=$_SESSION['username'];
$today = GETDATE();
$id = $id=$_REQUEST['id']; 


// insert values into the database

if ($capacity < 1)
	
{
	echo 'The ride is fully booked! Book another ride';
	echo '<meta content="3;availablerides.php?" http-equiv="refresh" />';
	
	$updatestatus = "UPDATE registeredrides SET status='Fully_booked' WHERE rideid='$id'";
	$query=mysql_query($updatestatus);
}
else{	

$insert= "INSERT INTO  bookedrides (vehicleno, origin, destination, bookedby, departure, driver) VALUES ('$vehiclereg', '$origin','$destination','$bywho', '$departure', '$driver')";
$query=mysql_query($insert);
if($query){
echo '<img src="images/492.png" /> &nbsp;! Ride successfully booked! ';
 echo '<meta content="5;availablerides.php?" http-equiv="refresh" />';
 
 $capacity = $capacity - 1;
 $updatecapacity = "UPDATE registeredrides SET capacity='$capacity' WHERE rideid='$id'";
 $query=mysql_query($updatecapacity);
 
		if ($capacity <1)
		{
			
			$updatestatus = "UPDATE registeredrides SET status='Fully_booked' WHERE rideid='$id'";
			$query=mysql_query($updatecapacity);
		}
		
		
		//email module	
		require("PHPMailer/PHPMailerAutoload.php"); //or select the proper destination for this file if your page is in some   //other folder
ini_set("SMTP","ssl://smtp.gmail.com"); 
ini_set("smtp_port","465"); //No further need to edit your configuration files.
$mail = new PHPMailer();
$mail->SMTPAuth = true;
$mail->Host = "smtp.gmail.com"; // SMTP server
$mail->SMTPSecure = "ssl";
$mail->Username = "apptestmail100@gmail.com"; //account with which you want to send mail. Or use this account. i dont care :-P
$mail->Password = "apptestmail2016"; //this account's password.
$mail->Port = "465";
$mail->isSMTP();  // telling the class to use SMTP
$rec1=$bywho; //receiver. email addresses to which u want to send the mail.
$mail->AddAddress($rec1);
$mail->Subject  = "Eventbook";
$mail->Body     = "Hello $bywho,

This mail is to notify you of your ride you just booked. Here are the details of your ride.

TRAVELLING FROM :	$origin
TRAVELLING TO	:	$destination
VEHICLE NUMBER  :	$vehiclereg
DRIVER			:	$driver

Thank you for using our App to book your ride.

Regards
Shareride Team.

";
$mail->WordWrap = 200;
if(!$mail->Send()) {
echo 'Message was not sent!.';
echo 'Mailer error: ' . $mail->ErrorInfo;
} else {
echo  'We have also sent you an email with the booking details';
}

		
		//end of email module
		
		
		
		
		
}else 
echo 'failed to insert data'. mysql_error();
echo '<meta content="5;availablerides.php?" http-equiv="refresh" />';
  }
  }
  
?>
  
 
    <br class="clear" />
  </div>
  </div>
</div>

<div class="wrapper col4">
  
</div>
</body>
</html>
<?php
	include "templates/footer.php";
?>