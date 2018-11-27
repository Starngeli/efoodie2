<?php
    session_start();
    include_once 'phpscripts/connection.php';


// initializing errors array
$errors = array(); 

//========================= REGISTER USER ==============================
if (isset($_POST['loginBtn'])) {
  // receive all input values from the form
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['pass']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password)) { array_push($errors, "Password is required"); }
  
  
  // Login user if there are no errors in the form
  if (count($errors) == 0) {
  	$hash_pass = md5($password);

	$query = "SELECT * FROM users WHERE email='$email' AND password='$hash_pass'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
		while($row = mysqli_fetch_array($results)){
			$role = $row['role'];
			$user_id = $row['id'];
			$user_name = $row['username'];
			$user_email = $row['email'];
			
			$_SESSION['username'] = $user_name;
			// $_SESSION['success'] = "You are now logged in";
			if ($role == "Admin"){
			header("location: admin.php");	
			exit();
			}elseif($role=="Chef"){
				header("location: chef.php");
			exit();
			}elseif($role=="Customer"){
				header("location: pages/home.php");
			exit();
			}
			// echo "Logged in <br>";
			// echo $_SESSION['username'];
     else {
      array_push($errors, "Wrong username, change pass");
	  
    }
	}
	}
  }
}

// ================================ LOGIN CONNECTION ===============================

// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    $password = md5($password);
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['username'] = $username;
      $_SESSION['success'] = "You are now logged in";
      header('location:Login_v18/index.php');
    }else {
      array_push($errors, "Wrong username, change pass");
    }
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"><link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="assets/login-page/vendor/bootstrap/css/bootstrap.min.css"><link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/login-page/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/login-page/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="assets/login-page/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/login-page/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/login-page/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="assets/login-page/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/login-page/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/login-page/css/main.css">
<!--===============================================================================================-->
</head>
<body style="background-color: #666666;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="post" action="">
					<span class="login100-form-title p-b-43">
						Login to eFoodie
					</span>
					
					
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email">
						<span class="focus-input100"></span>
						<span class="label-input100">Email</span>
					</div>
					
					
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="pass">
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>
			
<!--<li><a href="C:/xampp/htdocs/555/delicious/index.html">Enter into eFoodie</a></li>-->
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" name="loginBtn">
							Login
						</button>
					</div>
					
					<div class="text-center p-t-46 p-b-20">
						<span class="txt2">
							or sign up using
						</span>
					</div>
<li><a href="pages/signup.php">Sign up here</a></li>
					<!--<div class="login100-form-social flex-c-m">
						<a href="#" class="login100-form-social-item flex-c-m bg1 m-r-5">
							<i class="fa fa-facebook-f" aria-hidden="true"></i>
						</a>

						<a href="#" class="login100-form-social-item flex-c-m bg2 m-r-5">
							<i class="fa fa-twitter" aria-hidden="true"></i>
						</a>
					</div>-->
				</form>

				<div class="login100-more" style="background-image: url('assets/login-page/images/bg-01.jpg');">
				</div>
			</div>
		</div>
	</div>
	
	

	
	
<!--===============================================================================================-->
	<script src="../assets/login-page/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../assets/login-page/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="../assets/login-page/vendor/bootstrap/js/popper.js"></script>
	<script src="../assets/login-page/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../assets/login-page/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="../assets/login-page/vendor/daterangepicker/moment.min.js"></script>
	<script src="../assets/login-page/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="../assets/login-page/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="../assets/login-page/js/main.js"></script>

</body>
</html>