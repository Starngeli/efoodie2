<?php
    require_once "phpscripts/connection.php";

include "templates/header.php";
include "templates/testnav.php";

?>

    <main role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <div class="container">
          <h1 class="display-3">More about recipe</h1>
        </div>
      </div>
      <div class="container">
        <!-- Example row of columns -->
        <div class="row">
          <div class="col-md-12">
<?php
$messageId = $_GET["recipeid"];
$select_mgs = "SELECT * FROM recipes WHERE  recipeid= '$messageId' LIMIT 1";
    $msg_res = $db->query($select_mgs);
    if ($msg_res->num_rows > 0){
        $msg_row = $msg_res->fetch_assoc();
        ?>
            <h2><?php print $msg_row["recipe_title"]; ?></h2>
           
           <h6>Published on: <?php print date( $msg_row["recipe_publication_date"]); ?> by <?php print $msg_row["Chef_Name"]; ?></h6>
            
            <p><?php print $msg_row["recipe_full_text"]; ?></p>
            <p><?php print $msg_row["ingredients"]; ?></p>
            <p><?php print $msg_row["recipe_procedure"]; ?></p>
            <p><?php print $msg_row["ingredientsvalue"]; ?></p>
            <p><?php print $msg_row["recipe_photo"]; ?></p>
            
        <?php
                
    }else{
        echo 'No data';
    }         
?>
			<div class="form-group">
		<label for="comment">Comment</label>
		<textarea placeholder="Enter your comment" class="form-control form-control-md" name="comment" id="comment" required style="height:150px"></textarea>
	</div>
		
			<form method="POST" action="commentsprocess.php">
			 <input class="btn btn-secondary" type="post_comment" name="post_comment" value="Post comment" >
			</form>
			<form>
			  <li><a class="btn btn-secondary" href="schedule.php">View Chef's Schedule</a></li>             
			</form>
			</div>
        </div>

      </div> <!-- /container -->

    </main>

    <footer class="container">
      <p>Copyright &copy; efoodie</p>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
  </body>
</html>
