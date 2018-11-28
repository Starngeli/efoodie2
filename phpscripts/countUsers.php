<?php
$user_ID = $_POST['userID'];
$itemCode = '5252525';
$itemPrice = $_POST['itemPrice'];
$itemName = $_POST['itemName'];


$host = '127.0.0.1';
$db = 'efoodie';
$username = 'root';
$password = '';


$conn = mysqli_connect($host,$username,$password,$db);

$comment = $_POST['comment'];
$sql = "select count(*) as 'usercount' from users";
$result = mysqli_query($conn,$sql);
$dat = 1;
if (mysqli_num_rows($result) > 0){
    while ($row = mysqli_fetch_assoc($result)){
        $dat=$row['usercount'];
    }
}
echo json_encode($dat);
?>
