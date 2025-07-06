<?php
include './action/dbconnection.php'; 
$query = "select * from orders"; 
        $result = $conn->query($query);
?> 
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div align="center">
            <h1>Current Orders</h1>
            <table  style="background: activecaption; color: white" border="0">
                <thead style="color: white">
                    <tr>
                        <th>order Id</th>
                        <th>Mobile</th>
                        <th>Email</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Prescription</th>
                        <th>Note</th>
                        
                    </tr>
                      
                </thead>
                <tbody>
                    <?php
                    $query = "select * from orders";
                    $result = $conn->query($query);
               
                      while ($row = $result->fetch_assoc()) {
                    ?>
                
                    <tr>
                        
                        <td><?php echo $row['order_id'];?>"</td>
                        <td><?php echo $row['mobile'];?>"</td>
                        <td><?php echo $row['email'];?>"</td>
                        <td><?php echo $row['name'];?>"</td> 
                        <td><?php echo $row['address'];?>"</td>
                        
                        <td><img src="action/<?php echo $row['pres_image'];?>" width="300" height="400"></td>
                                <td><?php echo $row['note'];?>"</td>
                        <td>
                            
         
                     <?php
                         }
                        
                        
                        $conn->close();
                      ?>
                    </tbody>
            </table>
        </div>
    </body>
</html>
