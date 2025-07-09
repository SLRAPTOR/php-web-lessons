<?php

$username = "root";
$password ="";
$databaseName = "php_cls";
$HostUrl = "localhost";
$Hostport = "3306";
$link = mysql_connect($HostUrl,$username, $password,$databaseName);
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';
mysql_close($link);
?>