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
          <h1 class="display-3">Chef Control Panel</h1>
        </div>
      </div>
      <div class="container">
        <!-- Example row of columns -->

      <div class="row">
       
          
            <div class="col-md-3">
                <a href="addrecipe.php" class="btn btn-sq-lg btn-warning">
                  <i class="fa fa-user fa-5x"></i><br/>
                  Add New Recipes
                </a>
            </div>
            <div class="col-md-3">
            <a href="http://localhost/efoodie/addschedule.php" class="btn btn-sq-lg btn-success">
                  <i class="fa fa-user fa-5x"></i><br/>
                  Update Schedule and Profile
                </a>
            </div>
            
			<div class="col-md-3">
                <a href="view_message.php" class="btn btn-sq-lg btn-primary">
                    <i class="fa fa-user fa-5x"></i><br/>
                    Comments and Hire Response
                </a>
            </div>
			<div class="col-md-3">
                <a href="view_message.php" class="btn btn-sq-lg btn-primary">
                    <i class="fa fa-user fa-5x"></i><br/>
                    Edit Food Recipe Blogs
                </a>
            </div>
     
	</div>
      </div> <!-- /container -->
<?php
	include "templates/footer.php";
?>