<?php
//including the database connection file
include_once 'phpscripts/connection.php';

 
if(isset($_POST["submit"])){
$server = "localhost";
$username = "root";
$password = "";
$dbname = "efoodie";

// Create connection
//$db = mysqli_connect($server, $user, $password, $dbname);
//$conn = new mysqli($server, $email, $password, $dbname);
$db = mysqli_connect($server, $user, $password, $dbname);
// Check connection
if ($db->connect_error) {
die("Connection failed: " . $db->connect_error);
}

$username = $_POST ['username'];
$email = $_POST ['email'];
$password = $_POST ['password'];
$enc_password = md5($password);
$role = $_POST ['role'];


$username = mysqli_real_escape_string($db, $_POST['username']);
$email = mysqli_real_escape_string($db, $_POST['email']);
$enc_password = mysqli_real_escape_string($db, $_POST['enc_password']);
$role = mysqli_real_escape_string($db, $_POST["role"]);


$sql = "INSERT INTO users (username, email, password,role)
VALUES ('$username', '$email', '$enc_password', '$role')";

if ($db->query($sql) === TRUE) {
echo "<script type= 'text/javascript'>alert('New record created successfully');</script>";
} else {
echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $db->error."');</script>";
}
}
$result = mysqli_query($db, "SELECT * FROM users ORDER BY id DESC");

?>
<!DOCTYPE html>
<html>
<head>
    <title>Add Data</title>
</head>
 
<body>
<h1>Add New User</h1>
 
    <form name="form1" action="indexx.php" method="POST">
        <table width="25%" border="0">
		
            <tr> 
                <td>username</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr> 
                <td>password</td>
                <td><input type="password" name="password"></td>
            </tr>
			<tr> 
                <td>role</td>
                <td>
				<select type="text" name="role" required>
				<option value="">Select role</option>
				<option value="1">Admin</option>
				<option value="2">Chef</option>
				<option value="3">Customer</option>
				</select>
				
				</td>
            </tr>
			
            <tr> 
                <td>Email</td>
                <td><input type="text" name="email"></td>
            </tr>
			
            <tr> 
            </tr>
        </table>
		<input type="submit" button type="submit" class="btn btn-primary"value=" Submit " name="submit"/><br />
    </form>
	    <table width='80%' border=0>
        <tr bgcolor='#CCCCCC'>
            <td>Name</td>
            <td>Password</td>
            <td>role</td>
            <td>Email</td>
            <td>Update</td>
        </tr>
        <?php 
        while($res = mysqli_fetch_array($result)) {         
            echo "<tr>";
            echo "<td>".$res['username']."</td>";
            echo "<td>".$res['password']."</td>";
			echo "<td>".$res['role']."</td>";
            echo "<td>".$res['email']."</td>";    
            echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";        
        }
        ?>
    </table>
</body>
</html>
