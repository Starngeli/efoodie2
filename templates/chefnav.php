<!--<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="#">eFoodie</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>-->
	  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Delicious Home</title>
    <link rel="icon" href="img/core-img/favicon.ico">
    <link rel="stylesheet" href="../assets/home-about-page/style.css">
</head>
<body>
<div class="delicious-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <nav class="classy-navbar justify-content-between" id="deliciousNav">
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>
                        <div class="classy-menu">
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>
                            <div class="classynav">
                                <ul>
                                    <li class="active"><a href="http://localhost/efoodie/pages/home.php">Home</a></li>
                                    <li><a href="view_recipes.php">Blogs</a></li>
                                    <li><a href="pages/about.php">About</a></li>
                                    <li><a href="http://localhost/efoodie/pages/contact-us.php">Contact Us</a></li>
                                    <li><a href="http://localhost/efoodie/pages/team.php">Team</a></li>
									<li><a href="../phpscripts/logout.php">Logout</a></li>									
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
	<!--	
		
     <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="pages/home.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/about.php">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/contact-us.php">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="viewrecipes.php">Recipe Blogs</a>
          </li>-->
            <?php
                if(isset($_SESSION["username"])){
            ?>
              <!--  <li class="nav-item active">
                    <a class="nav-link" href="phpscripts/logout.php">Sign Out</a>
                </li>-->
            <?php
                }
            ?> 
      <!--  </ul>
        <form class="form-inline my-2 my-lg-0">
			<div class = "text-white mr-sm-2">
				<h5> -->
				
					<?php
					if(isset($_SESSION["username"])){
						print "Hello " . $_SESSION["username"];//["fullName"];
						 }
					?> 
			<!--	</h5>
			</div>-->
   <!--       <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
-->
    </nav>
	<script src="../assets/home-about-page/js/jquery/jquery-2.2.4.min.js"></script>
    <script src="../assets/home-about-page/js/bootstrap/popper.min.js"></script>
    <script src="../assets/home-about-page/js/bootstrap/bootstrap.min.js"></script>
    <script src="../assets/home-about-page/js/plugins/plugins.js"></script>
    <script src="../assets/home-about-page/js/active.js"></script>
	</body>
	</html>