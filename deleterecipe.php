<?php
//including the database connection file
include_once 'phpscripts/connection.php';
 
//getting recipeid of the data from url
$recipeid = $_GET['recipeid'];
 
//deleting the row from table

$result = mysqli_query($db, "DELETE FROM recipes WHERE recipeid=$recipeid");
 
//redirecting to display sign up page (indexx.php in our case)
header("Location:managerecipes.php");
