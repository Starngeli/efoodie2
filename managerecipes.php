<?php
    require_once "phpscripts/connection.php";

include "templates/header.php";
include "templates/testnav.php";

?>

    <main role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <div class="container">
          <h1 class="display-3">Recipe List:</h1>
        </div>
      </div>
      <div class="container">
        <!-- Example row of columns -->
	  
	  <table class="table table-striped">
		  <thead>
				<tr>
				  <th scope="col">#</th>
				  <th scope="col">Recipe Title</th>
				  <th scope="col">Recipe Full Text</th>
				  <th scope="col">Recipe Publication Date</th>
				  <th scope="col">Ingredients</th>
				  <th scope="col">Recipe Procedure</th>
				  <th scope="col">Ingredients Value</th>
				  <th scope="col">Chef Name</th>
				  <th scope="col">Actions</th>
				</tr>
		  </thead>
		  <?php
$spot_users = "SELECT * FROM recipes";
$user_res = $db->query($spot_users);
if($user_res->num_rows > 0){
		?>  
		  <tbody>
<?php
	while($users_row = $user_res->fetch_assoc()){
?>
						<tr>
							<th scope="row">1</th>
							<td><?php print $users_row["recipe_title"]; ?></td>
							<td><?php print $users_row["recipe_full_text"]; ?></td>
							<td><?php print $users_row["recipe_publication_date"]; ?></td>
							<td><?php print $users_row["ingredients"]; ?></td>
							<td><?php print $users_row["recipe_procedure"]; ?></td>
							<td><?php print $users_row["ingredientsvalue"]; ?></td>
							<td><?php print $users_row["Chef_Name"]; ?></td>
							<td>[Edit][ <a href = "delete.php?id=<?php print $users_row["id"]; ?>" >Delete</a> ]</td>
						</tr>
<?php
}
?>
		  </tbody>
<?php
}
?>
		  <tfoot>
		  
		  </tfoot>
	</table>

      </div> <!-- /container -->

    </main>
<?php
	include "templates/footer.php";
?>