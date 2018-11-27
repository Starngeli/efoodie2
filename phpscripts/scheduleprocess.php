<?php
	
	//The statement below establishes the database connection by importing the code written in db_connect.php located in  includes.
    
	include_once '../phpscripts/connection.php';
    
  
	if (isset($_POST["save_schedule"])){    

    $schedule_id = mysqli_real_escape_string($db, $_POST["schedule_id"]);
    $chef_name = mysqli_real_escape_string($db, $_POST["chef_name"]);
    $chef_specialization = mysqli_real_escape_string($db, $_POST["chef_specialization"]);
    $chef_rates = mysqli_real_escape_string($db, $_POST["chef_rates"]);
    $days_available = mysqli_real_escape_string($db, $_POST["days_available"]);
    $chef_photo = mysqli_real_escape_string($db, $_POST["chef_photo"]);
    
    $schedule_insert = "INSERT INTO schedule(schedule_id, chef_name, chef_specialization,chef_rates,days_available,chef_photo) VALUES ('$schedule_id', '$chef_name', '$chef_specialization','$chef_rates','$days_available','$chef_photo')";
    
    if($db->query($schedule_insert) === TRUE){
        header("Location: ../addschedule.php");
        exit();
    }else{
        print "Failed: " . $db->error;
    }
    
    }
	
	
?>