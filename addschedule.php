<?php
session_start();
require_once 'phpscripts/connection.php';
	
	include "templates/header.php";
	include "templates/nav.php";
?>

    <main role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <div class="container">
          <h1 class="display-3">Chef Schedule</h1>
        </div>
      </div>
      <div class="container">
        <!-- Example row of columns -->

      <div class="row">
       
        <div class="row">
          <div class="col-md-8">
            <h2>Schedule</h2>
<form method = "POST" action = "phpscripts/scheduleprocess.php" autocomplete = "off" accept-charset="UTF-8">
    
    <div class="form-group">
		<label for="chef_name">Chef Name</label>
		<input placeholder="Enter your Chef Name" class="form-control form-control-md" name="chef_name" type="text" id="chef_name" required />
	</div>
    <div class="form-group">
		<label for="chef_specialization">Chef Specialization</label>
		<textarea placeholder="Enter Chef Specialization" class="form-control form-control-md" name="chef_specialization" id="chef_specialization" required style="height:170px" ></textarea>
	</div>
	
	<div class="form-group">
		<label for="chef_rates">Chef Rates</label>
		<textarea placeholder="Enter the Chef Rates" class="form-control form-control-md" name="chef_rates" id="chef_rates" required style="height:170px" ></textarea>
	</div>
	
	<div class="form-group">
		<label for="days_available">Days Available</label>
		<textarea placeholder="Enter the Days Available" class="form-control form-control-md" name="days_available" id="days_available" required style="height:170px" ></textarea>
	</div>
	
    <div class="form-group">
		<label for="chef_photo">Chef Photo</label>
		<input placeholder="Upload Chef Photo" class="form-control form-control-md" name="chef_photo" type="file" id="chef_photo" />
	</div>
    <div class="form-group">
		<input class="btn btn-primary" type="submit" name="save_schedule"  value="Save Schedule">
	</div>
</form>
          </div>
          <div class="col-md-4">
            <h2>Chef Schedule</h2>
            <p>Post your Schedule<br/>
			We are here for the food enthusiasts.</p>
            
          </div>
        </div>
     
	</div>
      </div> <!-- /container -->
<?php
	include "templates/footer.php";
?>