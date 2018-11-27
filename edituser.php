<?php
require_once "phpscripts/connection.php";

$id = $_GET["id"];

$spot_Euser = "SELECT * FROM users WHERE id = '$id' LIMIT 1";
$edit_res = $db->query($spot_Euser);
if($edit_res->num_rows < 1){
    header("Location: userlist.php?DontExist");
	exit();
}

$edit_row = $edit_res->fetch_assoc();

include "templates/header.php";
include "templates/nav.php";

?>
    <main role="main">

      

      <div class="container">
        <!-- Example row of columns -->
        <div class="row">
            <div class="col-md-8">
                <h2>Update <?php print $edit_row["username"]; ?></h2>
            </div>
        </div>
        <div class="row">
          <div class="col-md-4">

<form method = "POST" action = "signup.php" autocomplete = "off" accept-charset="UTF-8">
    <div class="form-group">
		<label for="username">User Name</label>
		<input placeholder="Enter your User Name" class="form-control form-control-md" name="username" type="text" id="username" value = "<?php print $edit_row["username"]; ?>" required />
	</div>
    <div class="form-group">
		<label for="role">Choose Role</label>
		<select class="form-control form-control-md" name="role"  id="role" required />
        <option value = "<?php print $edit_row["role"]; ?>" ><?php print $edit_row["role"]; ?></option>
        <option value = "Chef" > Chef </option>
        <option value = "Customer" > Customer </option>
        
        </select>
	</div>
	<div class="form-group">
		<label for="gender">Gender</label>
		<select class="form-control form-control-md" name="gender"  id="gender" required />
        <option value = "<?php print $edit_row["gender"]; ?>" ><?php print $edit_row["gender"]; ?></option>
        <option value = "Male" > Male </option>
        <option value = "Female" > Female </option>
        
        </select>
	</div>
    
    <div class="form-group">
		<input type="hidden" name="id"  value="<?php print $edit_row["id"]; ?>" />
        
		<input class="btn btn-primary" type="submit" name="updateUser"  value="Update Now" OnClick = "return confirm('Are you sure you want to change <?php print $edit_row["username"]; ?> in the database?')" />
	</div>
          </div>
          <div class="col-md-4">
    <div class="form-group">
		<label for="email">Email Address</label>
		<input placeholder="Enter your email" class="form-control form-control-md" name="email_address" type="email" id="email" value = "<?php print $edit_row["email"]; ?>" required />
	</div>
	<div class="form-group">
		<label for="phonenumber">Phone Number</label>
		<input placeholder="Enter your phonenumber" class="form-control form-control-md" name="phonenumber" type="phonenumber" id="phonenumber" value = "<?php print $edit_row["phonenumber"]; ?>" required />
	</div>
    

</form>
          </div>
          <div class="col-md-4">
            <h2>Details</h2>
<form method = "POST" action = "signup.php" autocomplete = "off" accept-charset="UTF-8">
    <div class="form-group">
		<h5 for="username">Full Name: </h5>
		<?php print $edit_row["username"]; ?>
	</div>
    <div class="form-group">
		<h5 for="role">Choose Role: </h5>
        <?php print $edit_row["role"]; ?>
	</div>
    <div class="form-group">
		<h5 for="email">Email Address: </h5>
		<?php print $edit_row["email"]; ?>
	</div>
	<div class="form-group">
		<h5 for="phonenumber">Phone Number: </h5>
		<?php print $edit_row["email"]; ?>
	</div>
	<div class="form-group">
		<h5 for="gender">Gender: </h5>
		<?php print $edit_row["gender"]; ?>
	</div>
    
</form>
          </div>
        </div>

        <hr>

      </div> <!-- /container -->

<?php
	include "templates/footer.php";
?>
