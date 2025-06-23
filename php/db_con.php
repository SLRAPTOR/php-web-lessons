<?php

$username = "root";
$password ="";
$databaseName = "test";
$HostUrl = "localhost";
$Hostport = "3306";

$connection = new mysqli($HostUrl, $username,  $password,$databaseName, $Hostport);
//$connection = mysql_connect($HostUrl,$username, $password,$databaseName);

if($connection->connect_error){
    echo 'Error !, Not Connected.' . $connection->connect_error;
}else{
    echo "connected Successfully !";
}

//insert query
$sql = "INSERT INTO users(id,name,birthday,email) "
        . "values('janith','1880-12-3','janith@ijts.lk')";

$isSaved = mysqli_query($connection, $sql);
echo "is saved ? ".$isSaved;

mysqli_close($connection);

?>