<?php
	session_start();
  
	require_once 'phpscripts/connection.php';

	include "templates/header.php";
	include "templates/testnav.php";
?>

    <main role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <div class="container">
          <h1 class="display-3">Compose New Recipe</h1>
        </div>
      </div>
      <div class="container">
        <!-- Example row of columns -->

      <div class="row">
       
        <div class="row">
          <div class="col-md-8">
            <h2>Compose New Recipe</h2>
<form method = "POST" action = "phpscripts/processes.php" autocomplete = "off" accept-charset="UTF-8">
    <div class="form-group">
		<label for="recipe_chefid">Chef</label>
    <!-- 
    The input below will just display the current user's full name in a disabled input field. A way to show the person submitting data the author in cation
    -->        
        <input placeholder="Enter your Author" class="form-control form-control-md" type="text" id="recipe_chefid" disabled value = "<?php print $_SESSION["username"]; ?>" />
    <!-- 
    The input below will capture a hidden value of the current user's ID (primary key). The trick is, this ID will be submitted together with the rest of the new article's information. The ID will be as well inserted in the article table as a reference to the users' table to identify the author.
    -->
		<input name="recipe_chefid" type="hidden" id="recipe_chefid" value = "<?php print $_SESSION["username"]["userId"]; ?>" />
	</div>
    <div class="form-group">
		<label for="recipe_title">Recipe Title</label>
		<input placeholder="Enter your Recipe Title" class="form-control form-control-md" name="recipe_title" type="text" id="recipe_title" required />
	</div>
    <div class="form-group">
		<label for="recipe_full_text">Recipe Description</label>
		<textarea placeholder="Enter the Recipe Full Text" class="form-control form-control-md" name="recipe_full_text" id="recipe_full_text" required style="height:170px" ></textarea>
	</div>
	
	<div class="form-group">
		<label for="ingredients">Recipe Ingredients</label>
		<textarea placeholder="Enter the Recipe Ingredients" class="form-control form-control-md" name="ingredients" id="ingredients" required style="height:170px" ></textarea>
	</div>
	
	<div class="form-group">
		<label for="recipe_procedure">Recipe Procedure</label>
		<textarea placeholder="Enter the Recipe Full Text" class="form-control form-control-md" name="recipe_procedure" id="recipe_procedure" required style="height:170px" ></textarea>
	</div>
	
    <div class="form-group">
		<label for="article_photo">Recipe Photo</label>
		<input placeholder="Upload Recipe Photo" class="form-control form-control-md" name="article_photo" type="file" id="article_photo" />
	</div>
	
	<div class="form-group">
		<label for="ingredientsvalue">Ingredients Value </label>
		<textarea placeholder="Enter the Recipe Full Text" class="form-control form-control-md" name="ingredientsvalue" id="ingredientsvalue" required style="height:170px" ></textarea>
	</div>
	
    <div class="form-group">
		<label for="article_publication_date">Publication Date</label>
		<input placeholder="Enter your Recipe Title" class="form-control form-control-md" name="article_publication_date" type="date" id="article_publication_date" />
	</div>
    <div class="form-group">
		<input class="btn btn-primary" type="submit" name="save_recipe"  value="Save Recipe">
	</div>
</form>
          </div>
          <div class="col-md-4">
            <h2>Food lovers</h2>
            <p>This is an opportunity to showcase your chef skills, be as interesting and wild in your recipe blog posts.<br/>
			We are here for the food enthusiasts.</p>
            
          </div>
        </div>
     
	</div>
      </div> <!-- /container -->
<?php
	include "templates/footer.php";
?>