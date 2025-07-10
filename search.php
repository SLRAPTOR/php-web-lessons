<?php
include './dbconnection.php';
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
            <form method="get" action="frontPage.php" />
            Search : <input type="text" name="keyword" id="keyword" /> 
            <input type="submit" value="Search" name="search" />
        </form>
        <br>
        <table> 
            <?php 
            $query = "SELECT * FROM product where name like '%".$keyword."%'";
            $result = $connection->query($query);
            while($row = $result->fetch_assoc()){
            ?>
           
            <tr style="background-color: #ccc; width: 300px; ">
           
                <td>
                    <a href="viewProduct.php?pid=<?php echo $row["id"];?>">
                    <img width="150" height="180" src="productImage/<?php echo $row["image"];?>">
                     </a>
                    </td>
            
                    <td  >
                       
                 
                    <?php  
                echo "<h3>".$row["name"]."</h3>";
                echo "<h5>".$row["Description"]."</h5>";
                echo "<h3>Price : ".$row["sellPrice"]."</h3>";
                 ?>
                       
                 
        </td>
            </tr> 
          
            <?php } ?>
        </table> 
         </div>
        <footer class="fo">
            
            
        </footer>
    </body>
</html>

