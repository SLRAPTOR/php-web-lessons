<?php 
include './DB_Conn.php';
$userID = $_GET['id']; 
$sql = "DELETE FROM users where id = ".$userID." ";
$isDelete = mysqli_query($connection, $sql);
if($isDelete){
    echo "User Delete Successfully !";
}else{    echo 'Error !';}
?>
<a href="registerUser.php">back</a>

<!--0719166476-->
<!--anydesk.com-->