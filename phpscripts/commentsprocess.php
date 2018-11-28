<?php
	
	//The statement below establishes the database connection by importing the code written in phpscripts/connection.php located in  includes.
    
	include_once '../phpscripts/connection.php';
    
  if (isset($_POST["post_comment"])){
	  $comment = mysqli_real_escape_string($db, $_POST["comment"]);
	  $art_insert = "INSERT INTO comment(comment) VALUES ('$comment')";
	  if($db->query($art_insert) === TRUE){
        header("Location: ../readmore.php");
        exit();
    }else{
        print "Failed: " . $db->error;
    }
  }
  ?>