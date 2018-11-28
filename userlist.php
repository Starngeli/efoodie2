<?php
    require_once "phpscripts/connection.php";

include "templates/header.php";
include "templates/testnav.php";

?>

    <main role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <div class="container">
          <h1 class="display-3">User List</h1>
        </div>
      </div>
      <div class="container">
        <!-- Example row of columns -->
	  
	  <table class="table table-striped">
		  <thead>
				<tr>
				  <th scope="col">#</th>
				  <th scope="col">Full Name</th>
				  <th scope="col">Email Address</th>
				  <th scope="col">User Name</th>
				  <th scope="col">User Role</th>
				  <th scope="col">Actions</th>
				</tr>
		  </thead>
		  <?php
$spot_users = "SELECT * FROM users WHERE role <> 'Customers'";
$user_res = $db->query($spot_users);
if($user_res->num_rows > 0){
		?>  
		  <tbody>
<?php
	while($users_row = $user_res->fetch_assoc()){
?>
						<tr>
							<th scope="row">1</th>
							<td><?php print $users_row["username"]; ?></td>
							<td><?php print $users_row["email"]; ?></td>
							<td><?php print $users_row["username"]; ?></td>
							<td><?php print $users_row["role"]; ?></td>
							<td><?php print $users_row["phonenumber"]; ?></td>
							<td><?php print $users_row["gender"]; ?></td>
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