<?php
include './DB_Conn.php';
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Search Products</title>
        <?php 
        $keyword = "";
        if(isset($_GET['keyword'])){
            $keyword = $_GET['keyword']; 
            ?>
                  <h3>Search result for : <?php echo $keyword;?></h3>
                <?php 
        }
        ?>
    </head>
    <body>
        <div align="center">
            <form method="get" action="searchProducts.php" />
            Search : <input type="text" name="keyword" id="keyword" /> 
            <input type="submit" value="Search" name="search" />
        </form>
        <br>
        <table> 
            <?php 
            $query = "SELECT * FROM products where product_name like '%".$keyword."%'";
            $result = $connection->query($query);
            while($row = $result->fetch_assoc()){
            ?>
           
            <tr style="background-color: #ccc">
           
                <td>
                    <a href="viewProduct.php?pid=<?php echo $row["id_product"];?>">
                    <img width="150" height="180" src="productImages/<?php echo $row["img_url"];?>">
                     </a>
                    </td>
                <td>
                       <a href="viewProduct.php?pid=<?php echo $row["id_product"];?>">
                 
                    <?php  
                echo "<h3>".$row["product_name"]."</h3>";
                echo "<h5>".$row["product_description"]."</h5>";
                echo "<h3>Price : ".$row["sell_price"]."</h3>";
                 ?>
                       </a>
                 
        </td>
            </tr> 
          
            <?php } ?>
        </table> 
         </div>
    </body>
</html>
