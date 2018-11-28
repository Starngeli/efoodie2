    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="#">eFoodie</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="home.php">Home</a>
          </li>
		  <li class="nav-item">
            <a class="nav-link" href="../view_recipes.php">Blogs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../pages/about.php">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../pages/contact-us.php">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../pages/team.php">Team</a>
          </li>
		  <li class="nav-item">
            <a class="nav-link" href="manageschedules.php">Hire</a>
          </li>
		  <li class="nav-item">
            <a class="nav-link" href="phpscripts/logout.php">Log Out</a>
          </li>
		  
            <?php
                if(isset($_SESSION["control"])){
            ?>
                <li class="nav-item active">
                    <a class="nav-link" href="data_process/signOut.php">Sign Out</a>
                </li>
            <?php
                }
            ?> 
        </ul>
        <form class="form-inline my-2 my-lg-0">
			<div class = "text-white mr-sm-2">
				<h5> 
				
					<?php
					if(isset($_SESSION["control"])){
						print "Hello " . $_SESSION["control"]["fullName"];
						 }
					?> 
				</h5>
			</div>
   <!--       <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>-->
        </form>
      </div>

    </nav>