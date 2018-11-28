<?php
	include_once '../phpscripts/connection.php';//The statement below establishes the database connection by importing the code written in db_connect.php located in  includes.
	
	include "../templates/testnav.php";

	if (isset($_POST["send_message"])){
		//In the line above, $_POST["send_message"] is set (isset) to trigger process that will take place with in the curly bracket. That is if $_POST["send_message"] is missing, no process will table place.
	   
	   //P.S.: Note that $_POST is an array if you do  print_r($_POST); after submission, you will be able to see all array elements
    /**********************************************
    The following statements declare variables that have been submitted from the input form $_POST["fullName"] is identical to name = "fullName" in <input type = "text" name = "fullName" />.
	The mysqli_real_escape_string() function escapes special characters in a string and create a legal SQL string to provide security against SQL injection. That is - mysqli_real_escape_string is used to filter entries to prevent possible attacks.
    //$_POST is used to acquire data that was submitted using the POST method from the user's form.
	**************************************************/
		$fullName = mysqli_real_escape_string($db, $_POST["fullName"]);
		$email_address = mysqli_real_escape_string($db, $_POST["email_address"]);
		$subject = mysqli_real_escape_string($db, $_POST["subject"]);
		$textMessage = mysqli_real_escape_string($db, $_POST["textMessage"]);
		/**************************************************
       The statement that follows is a query to insert specific values in specified table message's attributes.
	Note that (msg_fullName, msg_email, msg_subject, msg_fullText, msg_datetime) MUST BE IDENTICAL to the message's table attributes.
	***********************************************/
		$msg_insert = "INSERT INTO messages(msg_fullName, msg_email, msg_subject, msg_fullText, msg_datetime) VALUES ('$fullName', '$email_address', '$subject', '$textMessage', UNIX_TIMESTAMP())";
		/*********************************
	In the statement below, we invoke the database connection class using $db and we pass the $msg_insert argument to the query method.
	My wording may not make sense, but it is an OOP concept. Sorry!!
	*********************************/
		 if($db->query($msg_insert) === TRUE){
			 /****
		if the data insertion process is successful, the page will be redirected to contact.php, and exit, that is - php won't read any further lines on this process.php
		****/
			 header("Location:contact-us.php");
        exit();
		}else{
        print "Failed: " . $db->error;
    }
	/*******************************************
	You can check a MySQLi Object-oriented example on https://www.w3schools.com/php/php_mysql_insert.asp
	*******************************************/
	}
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact Us</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="../assets/contact-us-page/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/contact-us-page/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/contact-us-page/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/contact-us-page/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/contact-us-page/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/contact-us-page/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/contact-us-page/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/contact-us-page/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/contact-us-page/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/contact-us-page/css/util.css">
	<link rel="stylesheet" type="text/css" href="../assets/contact-us-page/css/main.css">
<!--===============================================================================================-->
</head>
<body>


	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" method = "POST" action = "">
				<span class="contact100-form-title">
					Send Us A Message
				</span>

				<label class="label-input100" for="first-name">Tell us your name *</label>
				<div class="wrap-input100 validate-input" data-validate="Type first name">
				<input placeholder="Enter your Full Name" class="form-control form-control-md" name="fullName" type="text" id="fullName" required autofocus />
				<!--	<input id="first-name" class="input100" type="text" name="first-name" placeholder="First name">-->
					<span class="focus-input100"></span>
				</div>
				

				<label class="label-input100" for="email">Enter your email *</label>
				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
				<input placeholder="Enter your email" class="form-control form-control-md" name="email_address" type="email" id="email" required />
					<!--<input id="email" class="input100" type="text" name="email" placeholder="Eg. example@email.com">-->
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="phone">Subject</label>
				<div class="wrap-input100">
				<input placeholder="Enter the subject" class="form-control form-control-md" name="subject" type="text" id="subject" required />
					<!--<input id="phone" class="input100" type="text" name="phone" placeholder="Eg. +1 800 000000">-->
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="message">Message </label>
				<div class="wrap-input100 validate-input" data-validate = "Message is required">
				<textarea placeholder="Enter the message" class="form-control form-control-md" name="textMessage" id="subject" required style="height:170px" ></textarea>
					<!--<textarea id="message" class="input100" name="message" placeholder="Write us a message"></textarea>-->
					<span class="focus-input100"></span>
				</div>
<div>
		<input class="btn btn-primary" type="submit" name="send_message"  value="Send Message">
	</div>
			
				<!--<div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						Send Message
					</button>
				</div>-->
			</form>

			<div class="contact100-more flex-col-c-m" style="background-image: url('../assets/contact-us-page/images/bg-01.jpg');">
				<div class="flex-w size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-map-marker"></span>
					</div>

					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							Address
						</span>

						<span class="txt2">
							Starmike Stores<br/>
							Syokimau,Machakos County, Kenya</br>
							Muthama Road Off Mombasa Road,</br>
							Office 10.
						</span>
					</div>
				</div>

				<div class="dis-flex size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-phone-handset"></span>
					</div>

					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							Lets Talk
						</span>

						<span class="txt3">
							+254 724 302604
						</span>
					</div>
				</div>

				<div class="dis-flex size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-envelope"></span>
					</div>

					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							General Support
						</span>

						<span class="txt3">
						 <a href="mailto:sombastanley38@gmail.com">sombastanley38@gmail.com</a><br />
							
						</span>
					</div>
					</div>
					
					<div class="dis-flex size1 p-b-47">
					
					
					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							Go back to home
						</span>

						<span class="txt3">
						 <a href="home.php">Back to home</a><br />
							
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>



	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="../assets/contact-us-page/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../assets/contact-us-page/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="../assets/contact-us-page/vendor/bootstrap/js/popper.js"></script>
	<script src="../assets/contact-us-page/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../assets/contact-us-page/vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="../assets/contact-us-page/vendor/daterangepicker/moment.min.js"></script>
	<script src="../assets/contact-us-page/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="../assets/contact-us-page/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>
	 <footer class="container">
      <p>Copyright &copy; eFoodie</p>
    </footer>
</body>
</html>
