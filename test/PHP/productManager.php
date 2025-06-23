
<html>

    <?php
    include './DB_connection.php';
    ?>
    <head>
        <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <link rel="stylesheet" type="text/css" href="stylesByGh8.css">
        <!--<link type="text/css" rel="stylesheet" href="style.css"/>-->

    </head>


    <body class="b6">
       <article>
  <header>
      <table style=" min-height: 200%; min-width: 200;  max-height: 100%; max-width: 100%;" >
          <tr class="navig-item" style="margin-left: 2%; width:50%;/*background-color: antiquewhite;*/">
              <td style="width:5%;"><a><img src="../icons/home(2).png" style=" min-height: 80%; min-width: 80%;  max-height: 100%; max-width: 100%;" /></a></td>
              <td style="width:5%;"><a><img src="../icons/previous.png" style="min-height: 100%; min-width: 100%; max-height: 80%; max-width: 80%;"/></a></td>
              <td> </td>
              <td> </td>
              <td> </td>
              <td> </td>
              <td  style="width:5%"><a><img src="../icons/menu(2).png" style="min-height: 100%; min-width: 100%; max-height: 25%; max-width: 25%; "/></a> </td>
          </tr>          
      </table>
  </header>
</article>
    <center><h1>Register products here</h1>
        <form action="registerProducts.php" method="POST">
            <table>
                <tr>
                    <th>Name :</th> 
                    <td><input type="text" name="inname" id="inname"/></td>
                </tr>
                <tr>
                    <th>Description :</th>
                    <td> <input type="text" name="indescription" id="indescription"/></td>
                </tr>
                <tr>
                    <th>
                        Category :
                    </th>
                    <td>
                        <input type="text" name="incategory" id="incategory"/>
                    </td>
                     <tr>
                         <th>Sell price :</th>
                         <td><input type="text" name="sellprice" id="sellprice"/></td>
                     </tr>
                <tr>
                <th>Buy price :</th>
                <td><input type="text" name="buyprice" id="buyprice"/></td>
                <tr>
                    <th>IS active : </th>
                    <td> <input type="text" name="isactive" id="isactive"/></td>
            </tr>
            <tr>
                <td colspan="2"><input class="b111" type="submit" value="Register"/></td> <td> </td>
            </tr>
            </table>
        </form></center>
    <a href="adminHome.php"/>back</a>

<table class="t">
    <tr>
        <td>Id</td>
        <td>Name</td>
        <td>Description</td>
        <td>Category</td>
        <td>Sell_price</td>
        <td>Buy_price</td>
        <td>Is_active</td>
        <td>#</td>
    </tr>
    <?php
    $query = "SELECT id,name,description,category,sellPrice,buyPrice,is_active FROM product";
    $result = $connection->query($query);
    while ($row = $result->fetch_assoc()) {
        ?><form action="updateProducts.php" method="POST">
            <tr>
                <td><input type="text" name="id" value="<?php echo $row["id"]; ?>"/></td>
                <td><input type="text" name="name" value="<?php echo $row["name"]; ?>"/></td>
                <td><input type="text" name="description" value="<?php echo $row["description"]; ?>"/></td>
                <td><input type="text" name="category" value="<?php echo $row["category"]; ?>"/></td>
                <td><input type="text" name="sellPrice" value="<?php echo $row["sellPrice"]; ?>"</td>
                <td><input type="text" name="buyPrice" value="<?php echo $row["buyPrice"]; ?>"/></td>
                <td><input type="text" name="isactive" value="<?php echo $row["is_active"]; ?>"/></td>
                <td><input type="submit" value="UPDATE"/></td>
                <td><a href="deleteProducts.php?id=<?php echo $row["id"]; ?>">DELETE</a></td>

            </tr>
        </form>
    <?php } ?>

</body>



</html>







