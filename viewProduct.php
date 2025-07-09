<?php
include './DB_Conn.php';
?>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" rel="stylesheet" href="1.css">
        
        <?php
        
        $pid = $_GET['pid'];
        
        ?>
    </head>
    
    <body> 
        <a href="searchProducts.php"> back </a>
         <?php 
            $query = "SELECT * FROM products where id_product = '".$pid."'";
            $result = $connection->query($query);
            while($row = $result->fetch_assoc()){
            ?>
        <div class="d">
            <img class="img" width="400" height="500" src="productImages/<?php echo $row["img_url"];?>">
        <span class="GIANG"><?php echo $row["product_name"];?></span>
        <span class="des"><?php echo $row["product_description"];?></span>
        <span class="p"> RS -: <?php echo $row["sell_price"];?> /= </span>
        <button class="button">Buy Now!</button> 
        
        </div> 
       
        <?php 
            }
        ?>
    </body>
</html>
