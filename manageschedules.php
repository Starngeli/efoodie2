<?php
    require_once "phpscripts/connection.php";

include "templates/header.php";
include "templates/testnav.php";

?>

    <main role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <div class="container">
          <h1 class="display-3">Schedules List:</h1>
        </div>
      </div>
      <div class="container">
        <!-- Example row of columns -->
	  
	  <table class="table table-striped">
		  <thead>
				<tr>
				  <th scope="col">#</th>
				  <th scope="col">Chef Name</th>
				  <th scope="col">Chef Specialization</th>
				  <th scope="col">Chef Rates</th>
				  <th scope="col">Days Available</th>
				  <th scope="col">Status</th>
				  <th scope="col">Actions</th>
				</tr>
		  </thead>
		  <?php
$spot_users = "SELECT * FROM schedule";
$user_res = $db->query($spot_users);
if($user_res->num_rows > 0){
		?>  
		  <tbody>
<?php
	while($users_row = $user_res->fetch_assoc()){
?>
						<tr>
							<th scope="row">1</th>
							<td><?php print $users_row["chef_name"]; ?></td>
							<td><?php print $users_row["chef_specialization"]; ?></td>
							<td><?php print $users_row["chef_rates"]; ?></td>
							<td><?php print $users_row["days_available"]; ?></td>
							<td><?php print $users_row["status"]; ?></td>
							<td>[ <a href = "hire.php" >Hire</a> ]</td>
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