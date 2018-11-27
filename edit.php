<?php
// including the database connection file
include_once 'phpscripts/connection.php';
 
if(isset($_POST['update'])){
	
 $id = $_POST['id'];
 
    $name=$_POST['username'];
    $password=$_POST['password'];
    $email=$_POST['email'];    
    
    // checking empty fields
    if(empty($username)) { //|| empty($password) || empty($email)) {            
        if(empty($username)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }
        
        if(empty($password)) {
            echo "<font color='red'>password field is empty.</font><br/>";
        }
        
        if(empty($email)) {
            echo "<font color='red'>Email field is empty.</font><br/>";
        }        
    } else {    
        //updating the table
        $result = mysqli_query($db, "UPDATE users SET username='$username',password='$password',email='$email' WHERE id=$id");
        
        //redirectig to the display page. In our case, it is index.php
        header("Location: indexx.php");
    }
}
?>
<?php
//getting id from url
$id = $_GET['id'];
 
//selecting data associated with this particular id
$result = mysqli_query($db, "SELECT * FROM users WHERE id=$id");
 
while($res = mysqli_fetch_array($result))
{
    $name = $res['username'];
    $password = $res['password'];
    $email = $res['email'];
}
?>
<html>
<head>    
    <title>Edit Data</title>
</head>
 
<body>
    <a href="index.php">Home</a>
    <br/><br/>
    
    <form name="form1" method="POST" action="edit.php">
        <table border="0">
            <tr> 
                <td>Name</td>
                <td><input type="text" name="username" value="<?php echo $username;?>"></td>
            </tr>
            <tr> 
                <td>Password</td>
                <td><input type="text" name="password" value="<?php echo $password;?>"></td>
            </tr>
            <tr> 
                <td>Email</td>
                <td><input type="text" name="email" value="<?php echo $email;?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>

