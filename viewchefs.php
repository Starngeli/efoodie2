<?php
include_once 'phpscripts/connection.php';
   

	include "templates/header.php";
	include "templates/nav.php";

?>
    <main role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <div class="container">
          <h1 class="display-3">Hire Chef</h1>
        </div>
      </div>

      <div class="container">
        <!-- Example row of columns -->
        <div class="row">
<?php

if (isset($_GET["schedule_id"])){
	$articleid = $_GET["schedule_id"];
	
    $select_art = "SELECT * FROM schedule";
	
	$art_res = $db->query($select_art);
	
    if ($art_res->num_rows > 0){ //Verifying if at least one row (num_rows or in other words number_of_rows is greater than (>) zero ) was found as a result of the select query above.
        
        $art_row = $art_res->fetch_assoc();
?>
        <div class="row">
          <div class="col-md-8">
            <h2><?php print $art_row["chef_specialization"]; ?></h2>
           
           <h6>Published on: <?php print date( $art_row["recipe_publication_date"]); ?> by <?php print $art_row["Chef_Name"]; ?></h6>

		     <p><?php print $art_row["chef_rates"]; ?></p>
			 <p><?php print $art_row["days_available"];?></p>
			 <p><?php print $art_row["chef_photo"];?></p>
			
			
		   
          </div>
          <div class="col-md-4">
            <h2>Hire Chef</h2>
            <p>Explore the different chefs available.</p>
            
          </div>
        </div>
<?php
}else{
        header("Location: ./");
		exit();
}
}else{
    /*****
		The $select_art query below has a MySQL JOIN syntax. This means we're selecting data from 2 different tables using a joint or a reference key, a foreign key. Remember the author's details are stored in users table and the articles are stored in the articles table. It is therefore important to select data while matching "users.`userId` with corresponding articles.`article_authorId`" For us to be able to match the article to the author (owner).	
    *****/
    $select_art = "SELECT * FROM schedule";
    
    /*****
    After database connection using new mysqli method, database connection object is returned. A query ($select_art) is passed to connection object's query method. This function returns a result set. Here we call it Article results or $art_res
    *****/
    $art_res= $db->query($select_art);
	
	
    if ($art_res->num_rows > 0){ //Verifying if at least one row (num_rows or in other words number_of_rows is greater than (>) zero ) was found as a result of the select query above.
        
        while($art_row = $art_res->fetch_assoc()){
			
	/******
	Likewise procedural way a row from result set is fetched using a fetch_assoc() method.

	This method returns a single row of result, so we use a while loop to fetch all rows in result set. In here, column names are used as array indexes to access result like an article title we do $art_row["article_title"]
	
	See example on for MySQLi Object-oriented: https://www.w3schools.com/php/php_mysql_select.asp
	
	******/
        ?>
                  <div class="col-md-4">
            <h2><?php print $art_row["chef_specialization"]; ?></h2>
           
           <h6>Available On: <?php print date( $art_row["days_available"]); ?> by Chef <?php print $art_row["chef_name"]; ?></h6>
            
   <?php 
			$max_words = 20; //initializing the number of words (20) to be printed as a brief story before the viewer reads more
			$art_fullText = addslashes($art_row["chef_specialization"]); //adding slashes in case of php encounters quotation marks
			
			$shown_string = implode(' ', array_slice(str_word_count(addslashes($art_fullText), 2), 0, $max_words)) . ' ... ' ; //converting the full text into an array storing all words, then slicing the array at the maximum number of words determined by $max_words
			?>
            
			<p><?php print $shown_string; //Print the sliced array ?></p>
		
            <p><a class="btn btn-secondary" href="hirechef.php?schedule_id=<?php print $art_row["schedule_id"]; ?>" role="button">Click here for more information</a></p>
        </div>
        <?php
        }         
    }else{
        echo 'No data';
    }

}	
?>
        </div>

        <hr />
        <hr />

      </div> <!-- /container -->
<?php
	include "templates/footer.php";
?>