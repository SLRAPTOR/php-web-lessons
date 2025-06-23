<?php

$username="root";
$password="pasindu12236";
$databaseName="Laptop_inventory";
$hosturl="localhost";
$hostport="3307";

$connection=new mysqli($hosturl, $username, $password, $databaseName, $hostport);

if($connection->connect_error){
    echo 'Error !, Not connected. '. $connection->connect_error;
}else{
    
   
}
?>
