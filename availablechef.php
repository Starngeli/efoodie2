<?php
session_start();
require_once 'phpscripts/connection.php';
	
	include "templates/header.php";
	include "templates/nav.php";
?>


  
<!DOCTYPE html>
<html>
<head>
<title>eFoodie</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="layout/styles/layout.css" type="text/css" />
<script type="text/javascript" src="layout/scripts/jquery.min.js"></script>
<script type="text/javascript" src="layout/scripts/jquery.innerfade.js"></script>
</head>
<body id="top">
<div class="wrapper col1">
  <div id="header">
    <div id="logo">
      <h1><a href="">eFoodie</a></h1>
      <p>Food enthusiasts</p>
    </div>
    <div id="search">
      <form action="#" method="post">
        <fieldset>
          <legend>Site Search</legend>
          <input type="text" value="Search the site&hellip;"  onfocus="this.value=(this.value=='Search the site&hellip;')? '' : this.value ;" />
          <input type="submit" name="go" id="go" value="GO" />
        </fieldset>
      </form>
    </div>
    <div id="topnav">
      <ul>       
		 <li><a href="">My Booked Chef</a></li>	
      </ul>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- shows who is logged in -->
<div class="wrapper col2">
<div>
  <p style="margin-left: 70%;"> You are logged in as  <?php echo ($_SESSION['username']) ?><a href="">  Logout</a></p>	
 
  </div>
</div>
<!-- container -->
<div class="wrapper col3">
  <div id="container">
  The following are the avalable Chefs. Select yours now!
   <div id="latest">
     <?php 
	 
			$select_schedule=mysqli_query("SELECT * FROM schedule WHERE days_available > cast(now() as date)");
			echo '<table style="width:100%;" style="font-family:arial;" border = 1px>';
			echo '<th>Chef Name</th><th>ORIGIN</th>  <th>Chef Specialization</th>  <th>Chef Rates</th>  <th>Days Available</th> <th>Chef Photo</th> <th>BOOK</th>';
			
			while($fetch=mysqli_fetch_array($select_schedule)){			

			echo '<tr><td>'.$fetch['chef_name'].'</td>  <td>'.$fetch['chef_specialization'].'</td>  <td>'.$fetch['chef_rates'].'</td>  <td>'.$fetch['days_available'].'</td>  <td>'.$fetch['chef_photo'].'</td>  </tr>';
			 
			}
			echo '</table>';
			?>

  
 
    <br class="clear" />
  </div>
  </div>
</div>
<div class="wrapper col4">
  
</div>
<!-- copyright region -->
</body>
</html>
<?php
	include "templates/footer.php";
?>