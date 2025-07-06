<?php
session_start();
include './dbconnection.php';
$username = "admin";
$password = "1234";
 
if ($username=='admin' && $password=='1234') {
    header("Location:../viewOrders.php?msg=welcome admin");    die();
} else {
    echo 'error';
}
 