<?php
include_once './errorController.php';
include './DB_Conn.php';
?><html>
    <head> 
        <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
    </head> <body>
<form action="doRegister.php" method="post"> 
 Name: <input type="text" name="inName" id="inName"  /><br> 
BirthDay: <input type="date" name="inBirthday" id="inBirthday" /><br> 
Email : <input type="email" name="inEmail" id="inEmail"  /><br> 
           <input type="submit" name="submitButton" value="Register" />
        </form> 
        <br> <table>
            <tr>
            <td>Id</td><td>Name</td><td>birthday</td><td>email</td><td>#</td>
            </tr>
            <?php 
            $query = "SELECT id,name,birthday,email FROM users";
            $result = $connection->query($query);
            while($row = $result->fetch_assoc()){ 
            ?>
            <form action="updateUser.php" method="POST" >
            <tr>
            <td><input type="text" name="id" id="id" value="<?php echo $row["id"];?>" /></td>
            <td><input type="text" name="name" id="name" value="<?php echo $row["name"];?>" /></td>
            <td><input type="date" name="birthday" id="birthday" value="<?php echo $row["birthday"];?>" /></td>
            <td><input type="email" name="email" id="email" value="<?php echo $row["email"];?>" /></td>
            <td><input type="submit" value="UPDATE" /> </td>
            <td><a href="deleteUser.php?id=<?php echo $row["id"]; ?>">DELETE</a></td>
            </tr>
            </form>
            <?php
            }
            ?>
        </table>
        
    </body>
</html>
