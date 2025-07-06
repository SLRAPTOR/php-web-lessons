<?php
include './action/dbconnection.php';

$keyword = "";
if (isset($_GET['keyword'])) {
    $keyword = $_GET['keyword'];
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include './includes/header.php';
        ?>
          <div align="center">
           
              <table style="background-color: aquamarine" border="0">
            <?php
            $searchProducts = "SELECT * FROM pharmacy_products WHERE name  LIKE '%" . $keyword . "%'";
            
            $result = $conn->query($searchProducts);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    ?>
                    <tr>
                        <td><img  src="images/<?php echo $row["image"]; ?>" width="200" height="200" ></td>
                        <td><h5><?php echo "Name:- ". $row["name"]; ?></h5>
                            <p><?php echo "Description:- ". $row['description']; ?></p>
                            <p><?php echo "Sell price:- ". $row["sell_price"]; ?></p>
                            <?php
                            if ($row['is_active']!= '1') {
          
                            ?>
                            <p style="color: red">not available</p>
                            <?php 
                            }else{?>
                            <p style="color: red">available</p> <?php 
                            }?>
                        </td>
                        <td><input type="submit" value="Add to cart" /></td>
                    </tr><br>
                    <?php
                }
            }
            $conn->close();
            ?>

        </table>
        </div>
    </body>
</html>
