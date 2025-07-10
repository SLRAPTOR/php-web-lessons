<?php

$username="root";
$password="pathu@1997.4";
$databaseName="inventory";
$hosturl="localhost";
$hostport="3307";




$connection=new mysqli($hosturl, $username, $password, $databaseName, $hostport);

if($connection->connect_error){
    echo 'Error !, Not connected. '. $connection->connect_error;
}else{
    
 
}
?>

