<?php
include_once '../phpscripts/connection.php';

// initializing errors array
$errors = array();

//========================= REGISTER USER ==============================
if (isset($_POST['signupBtn'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $phonenumber = mysqli_real_escape_string($db, $_POST["phonenumber"]);
  $gender = mysqli_real_escape_string($db, $_POST["gender"]);
  $role = mysqli_real_escape_string($db, $_POST["role"]);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password)) { array_push($errors, "Password is required"); }
  if (empty($phonenumber)) { array_push($errors, "Phone number is required"); }
  if (empty($gender)) { array_push($errors, "Gender is required"); }
  if (empty($role)) { array_push($errors, "Role is required"); }
  
  
  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists")  ;
    }

    if ($user['email'] === $email) {
      array_push($errors, "Email already exists");
    }
  }

  // Register user if there are no errors in the form
  if (count($errors) == 0) {
  	$hash_pass = md5($password);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (username, email, password,phonenumber,gender,role) 
  			  VALUES('$username', '$email', '$hash_pass','$phonenumber','$gender','$role')";
  	$new_user = mysqli_query($db, $query);
  	// $_SESSION['username'] = $username;
  	// $_SESSION['success'] = "You are now logged in";
	if($new_user){
		header('location: ../index.php');
	}else{
		echo "Registration failed";
	}
  }
}
?>

<!DOCTYPE html>
    <html lang="en" >

    <head>
        <meta charset="UTF-8">
        <title>Sign Up</title>
        <link rel="stylesheet" href="../assets/signup.css">
    </head>

    <body>
        <div id="login-box">
            <div class="left">
                <form method = "post" action="">
                    <h1>Sign up to eFoodie</h1>
                    <input type="text" name="username" placeholder="Username" id="username" required />
					<div class="form-group">
		<label for="gender">Choose Role</label>
		<select class="form-control form-control-md" name="role"  id="role" required />
        <option value = "" > Choose Role </option>
        <option value = "Chef" > Chef </option>
        <option value = "Customer" > Customer </option>
       
        
        </select>
	</div>
                    <input type="text" name="email" placeholder="E-mail" id="email" required />
                    <input type="password" name="password" placeholder="Password" id="hash_pass" required />
                    <input type="text" name="phonenumber" placeholder="Phone Number" id="phonenumber" required />
                   <div class="form-group">
		<label for="gender">Choose Gender</label>
		<select class="form-control form-control-md" name="gender"  id="gender" required />
        <option value = "" > Choose Gender </option>
        <option value = "Male" > Male </option>
        <option value = "Female" > Female </option>
       
        
        </select>
	</div>
                    <!-- <input type="password" name="password2" placeholder="Retype password" /> -->

                    <input class="btn btn-primary" type="submit" name="signupBtn" value="Sign me up" />
                </form>
            </div>
			


            <!--<div>
            <input class="btn btn-primary" type="submit" name="send_message"  value="Send Message">
            </div>-->
            <!--<div class="input">
            <button type="submit" class="btn" name="efoodie">Register</button>
            <input type="submit" name="efoodie" value="Sign me up" />
            </div>-->


            <!--<div class="right">
            <span class="loginwith">Sign in with<br />social network</span>

            <button class="social-signin facebook">Log in with facebook</button>
            <button class="social-signin twitter">Log in with Twitter</button>
            <button class="social-signin google">Log in with Google+</button>
            </div>

            <div class="or">OR</div>
            -->
        </div>
    </body>

</html>

