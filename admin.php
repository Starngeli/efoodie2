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
          <h1 class="display-3">Admin Control Panel</h1>
        </div>
      </div>
      <div class="container">
        <!-- Example row of columns -->

      <div class="row">
       
          
            <div class="col-md-3">
                <a href="#" class="btn btn-sq-lg btn-warning">
                  <i class="fa fa-user fa-5x"></i><br/>
                  Manage All Recipes
                </a>
            </div>
            <div class="col-md-3">
            <a href="userlist.php" class="btn btn-sq-lg btn-success">
                  <i class="fa fa-user fa-5x"></i><br/>
                  Manage All Users
                </a>
            </div>
            
			<div class="col-md-3">
                <a href="view_message.php" class="btn btn-sq-lg btn-primary">
                    <i class="fa fa-user fa-5x"></i><br/>
                    View Users Messages
                </a>
            </div>
			
     
	</div>
      </div> <!-- /container -->
<?php
	include "templates/footer.php";
?>