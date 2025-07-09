<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <!--iterate table-->
        <table>
            <tr style="background-color: blueviolet"><td>No</td>
                <td>Data</td>
            </tr>
             <?php
           
         for($i = 1; $i <=10; $i++){
        ?>
            <tr>
                <td><?php  echo $i; ?></td>
                <td>your data here ! </td>
            </tr>
         <?php }
         ?> 
        </table>
        <br>select your Option
        <select name="happy">
      <?php   for($i = 1; $i <=20; $i++){  ?>
            <option><?php echo $i; ?></option> 
           <?php }  ?>
            <!--up to 20-->
        </select>
        
        Birthday : <br>
        Year:<select name="yy">
      <?php   for($i = 1980; $i <=2021; $i++){  ?>
            <option><?php echo $i; ?></option> 
           <?php }  ?>
            <!--up to 20-->
        </select>  Month:<select name="mm">
      <?php   for($i = 1; $i <=12; $i++){  ?>
            <option><?php echo $i; ?></option> 
           <?php }  ?>
            <!--up to 20-->
        </select>  <select name="dd">
      <?php   for($i = 1; $i <=31; $i++){  ?>
            <option><?php echo $i; ?></option> 
           <?php }  ?>
            <!--up to 20-->
        </select> 
       
        
    </body>
</html>
