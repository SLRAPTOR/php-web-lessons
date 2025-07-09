<?php
include_once './errorController.php';
include './DB_Conn.php';
$id = "";
if(isset($_POST['id'])){$id = $_POST['id'];}

$name = $_POST['name'];
$birthday = $_POST['birthday'];
$email = $_POST['email'];
//echo $id." ".$name." ".$birthday." ".$email;
$sql = "UPDATE users SET  name='".$name."',birthday='".$birthday."',email='".$email."' "
        . "where id = '".$id."' ";
$isSaved = mysqli_query($connection, $sql);
if($isSaved){
    echo "User Update Successfully !";
}else{    echo 'Error !';}

mysqli_close($connection);
 
?>

<a href="registerUser.php">back</a>