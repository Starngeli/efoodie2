<?php
    include_once 'phpscripts/connection.php';

include "templates/header.php";
include "templates/testnav.php";

?>

    <main role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <div class="container">
          <h1 class="display-3">View Messages</h1>
        </div>
      </div>
      <div class="container">
        <!-- Example row of columns -->
        <div class="row">
          <div class="col-md-12">
<?php

$messageId = $_GET["messageId"];
$select_mgs = "SELECT * FROM messages WHERE messageId = '$messageId' LIMIT 1";
    $msg_res = $db->query($select_mgs);
    if ($msg_res->num_rows > 0){
        $msg_row = $msg_res->fetch_assoc();
        ?>
            <h2><?php print $msg_row["msg_subject"]; ?></h2>
           
           <h6>Published on: <?php print date("jS F Y H:i:s", $msg_row["msg_datetime"]); ?> by <?php print $msg_row["msg_fullName"]; ?></h6>
            
            <p><?php print $msg_row["msg_fullText"]; ?></p>
            
        <?php
                
    }else{
        echo 'No data';
    }         
?>
          </div>
        </div>

      </div> <!-- /container -->

    </main>

    <footer class="container">
      <p>Copyright &copy; eFoodie</p>
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
