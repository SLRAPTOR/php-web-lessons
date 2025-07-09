<?php
include_once './errorController.php';
include './DB_Conn.php';
$name = $_POST['inName'];
$inBirthday = $_POST['inBirthday'];
$inEmail = $_POST['inEmail'];

echo $name." ".$inBirthday." ".$inEmail;

$sql = "INSERT INTO users(name,birthday,email) "
    . " values('".$name."','".$inBirthday."',"
        . "'".$inEmail."')";
$isSaved = mysqli_query($connection, $sql);
if($isSaved){
    echo "User Saved Successfully !";
}else{    echo 'Error !'.$connection->error;}
mysqli_close($connection);

?>
