<?php
include './DB_connection.php';

$userId= $_GET['id'];

$sql = "DELETE FROM product WHERE id ='".$userId."'";
$isdeleted= mysqli_query($connection, $sql);
if($isdeleted){
    
    echo 'user deleted successfully';
}else{
    
    echo 'error !';
}

?>

<a href="productManager.php">back</a>