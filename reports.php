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
          <h1 class="display-3">Reports</h1>
        </div>
      </div>
      <div class="container">
        <!-- Example row of columns -->

      <div class="row">
       
          
            <div class="col-md-3">
                <a href="#" class="btn btn-sq-lg btn-warning">
                  <i class="fa fa-user fa-5x"></i><br/>
                 <div id="custT"></div>Customers
                </a>
            </div>
            <div class="col-md-3">
            <a href="userlist.php" class="btn btn-sq-lg btn-success">
                  <i class="fa fa-user fa-5x"></i><br/><div id="chefT"></div>
                 Recipes
                </a>
            </div>
            
			<div class="col-md-3">
                <a href="view_message.php" class="btn btn-sq-lg btn-primary">
                    <i class="fa fa-user fa-5x"></i><br/><div id="adminT"></div>
                   Admin
                </a>
            </div>
			
     
	</div>

          <script>
              var comment = 'wake up';
              var usersT = $.ajax({
                  type: "post",
                  method: "POST",
                  data: {comment:comment},
                  url: "phpscripts/countUsers.php",
                  dataType: 'json',
                  statusCode: {
                      500: function () {
                          console.log('err');
                      }
                  }
              });
              usersT.done(function(response22){
                  console.log('oooooooooooo',response22);
                  document.getElementById('custT').innerHTML = response22;
              });


              var chefT = $.ajax({
                  type: "post",
                  method: "POST",
                  data: {comment:comment},
                  url: "phpscripts/recipeTotal.php",
                  dataType: 'json',
                  statusCode: {
                      500: function () {
                          console.log('err');
                      }
                  }
              });
              chefT.done(function(response23){
                  console.log('oooooooooooo',response23);
                  document.getElementById('chefT').innerHTML = response23;
              });


              var beefT = $.ajax({
                  type: "post",
                  method: "POST",
                  data: {comment:comment},
                  url: "phpscripts/countRole.php",
                  dataType: 'json',
                  statusCode: {
                      500: function () {
                          console.log('err');
                      }
                  }
              });
              beefT.done(function(response3){
                  console.log('oooooooooooo',response3);
                  document.getElementById('adminT').innerHTML = response3;
              });
          </script>
      </div> <!-- /container -->
<?php
	include "templates/footer.php";
?>