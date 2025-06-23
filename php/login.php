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
        <link rel="stylesheet" type="text/css" href="../css/style.css" >  
    </head>

    <body>
    <center>
        <div class='s'>
            <form action="db_con.php">


                <h1>Sing up </h1>
                <span>Id</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number"> <br>
                <span>Name</span>;&nbsp;&nbsp;&nbsp;<input type="text"><br>
                <span>birthday</span>&nbsp;&nbsp;&nbsp;
                <select> 
                    <option selected >  </option>
                    <?php
                    for ($i = 1; $i <= 10; $i++) {
                        ?>
                        <option> <?php echo 1996 + $i; ?> </option>
                    <?php } ?>

                </select> <br>
                <span>Email</span>&nbsp;&nbsp;&nbsp;<input type="text"><br><br>
                <input type="submit" value="Sing up">




            </form>
        </div>
    </center>
</body>
</html>