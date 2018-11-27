<?php
//including the database connection file
include_once 'phpscripts/connection.php';
 
//getting id of the data from url
$id = $_GET['id'];
 
//deleting the row from table

$result = mysqli_query($db, "DELETE FROM users WHERE id=$id");
 
//redirecting to display sign up page (indexx.php in our case)
header("Location:userlist.php");
