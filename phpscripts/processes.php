<?php
	
	//The statement below establishes the database connection by importing the code written in db_connect.php located in  includes.
    
	include_once '../phpscripts/connection.php';
    
  
	if (isset($_POST["save_recipe"])){    

    $recipe_chefid = mysqli_real_escape_string($db, $_POST["recipe_chefid"]);
    $recipe_title = mysqli_real_escape_string($db, $_POST["recipe_title"]);
    $recipe_full_text = mysqli_real_escape_string($db, $_POST["recipe_full_text"]);
    $ingredients = mysqli_real_escape_string($db, $_POST["ingredients"]);
    $recipe_procedure = mysqli_real_escape_string($db, $_POST["recipe_procedure"]);
    $ingredientsvalue = mysqli_real_escape_string($db, $_POST["ingredientsvalue"]);
    
        //Since the publication field is not mandatory, we need to verify if it contains any data upon submission, ELSE the publication time is set as NOW using time() on line 15
    if(isset($_POST["recipe_publication_date"])){
        $pub_date = mysqli_real_escape_string($db, $_POST["recipe_publication_date"]);
        //Converting the into date into an UNIX_DATETIME()
        $date = new DateTime($pub_date);
        $recipe_publication_date = strtotime( $date->format('Y-m-d H:i:s') );
    }else{
        $recipe_publication_date = time();        
    }
    // $recipe_photo = mysqli_real_escape_string($db, $_POST["recipe_photo"]);
    
    $art_insert = "INSERT INTO recipes(recipe_chefid, recipe_title, recipe_full_text,ingredients,recipe_procedure,ingredientsvalue, recipe_publication_date, recipe_created_date, recipe_last_update) VALUES ('$recipe_chefid', '$recipe_title', '$recipe_full_text','$ingredients','$recipe_procedure','$ingredientsvalue', '$recipe_publication_date', UNIX_TIMESTAMP(), UNIX_TIMESTAMP())";
    
    if($db->query($art_insert) === TRUE){
        header("Location: ../addrecipe.php");
        exit();
    }else{
        print "Failed: " . $conn->error;
    }
    
    }
	
	
?>