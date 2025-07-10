
<?php
include './dbconnection.php';
?>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" rel="stylesheet" href="dell.css">
        <link type="text/css" rel="stylesheet" href="style1.css"/>
        <link href="header.css" rel="stylesheet" type="text/css">
        <link href="footer.css" rel="stylesheet">
        <link href="css/all.min.css" rel="stylesheet">

        <?php
        $pid = $_GET['pid'];
        ?>
    </head>
    <div class="header">

        <table class="tbl">
            <tr>
                <td><div class="head"><h1>BuyLap.lk</h1></div></td>

                <td><a href="#"><button class="button2">Track My Order</button></a></td>
                <td><a href="#"><button class="button2">Purchasing</button></a></td>
                <td><a href="login.html"><button class="button2">Login </button></a></td>
                <td><a href="signup.php"><button class="button2">Sign Up </button></a></td>
            </tr>
        </table>

        <table>

        </table>
    </div>

    <body style="background-color: #ccffff"> 

        <?php
        $query = "SELECT * FROM product where id = '" . $pid . "'";
        $result = $connection->query($query);
        while ($row = $result->fetch_assoc()) {
            ?>
            <div class="d">
                <img class="img" width="500" height="500" src="productImage/<?php echo $row["image"]; ?>">
                <div style="margin-left: 700px;
                     margin-top: -400px; 
                     font-size: 20px;
                     font-family: Arial Rounded MT;
                     color: #666666;
                     font-weight: bold;">
                    <div ><?php echo $row["name"]; ?></div><br>
                    <div ><?php echo $row["Description"]; ?></div><br>
                    <div > LKR <?php echo $row["sellPrice"]; ?> /= </div><br><br><br><br><br><br>
                        
                <button class="sb1 fo">Buy Now</button><br><br> 
                <button class="sb1 fo" >Add to cart</button><br><br>
                <button class="sb2 fo">Whitelist</button><br>

            </div> 

            <?php
        }
        ?>
        <div class="wrapper">
            <div class="footer fl">
                <div class="sub-f">
                    <div class="sub-f-box fl">
                        <h4>
                            Community</h4>
                        <p class="ad">
                            <i class="fa fa-angle-double-right"></i>Announcements</p>
                        <p class="ad">
                            <i class="fa fa-angle-double-right"></i>Ansver Center</p>
                        <p class="ad">
                            <i class="fa fa-angle-double-right"></i> Discussion Board</p>
                        <p class="ad">
                            <i class="fa fa-angle-double-right"></i>Groups</p>
                    </div>
                    <div class="sub-f-box mfl">
                        <h4>
                            About Us</h4>
                        <div class="sub-f-f-b">
                            <div class="box-t-f-f fl">
                            </div>
                            <div class="t-ff-box fr">
                                <p>
                                    Experience online shopping in Sri Lanka with Buylap.lk by purchasing genuine quality laptops showcased by verified sellers across the country.</p>
                            </div>
                        </div>
                        <div class="sub-f-f-b">
                            <div class="box-t-f-f fl">
                            </div>
                            <div class="t-ff-box fr">
                                <p>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="sub-f-box mfl">
                        <h4>
                            Contact Us</h4>
                        <p class="mai">
                            <i class="fa fa-envelope">buylap@gmail.com</i></p>
                        <p class="mai">
                            <i class="fa fa-phone-alt">+94 11 2 456 321<br>+94 11 2 456 361</i></p>
                        <p class="mai">
                            <i class="fa fa-map-marker-alt"></i>No 1542/01,<br>Sri Jayawardanapura Rd,<br> Colombo -08</p>
                    </div>
                    <div class="sub-f-box fr">
                        <h4>
                            Stay Conneced</h4>
                        <p class="a">
                            Enter your email address  for our mailing list to keep yourself updated.</p>
                        <p class="a">
                        <form method="POST">
                            <div class="inp fl">
                                <p>
                                    <input type="email" name="uld" placeholder="email addreas" class="emailf"></p>
                            </div>
                            <p>
                                <input type="submit" name="sub" value="Search" class="infb fl"></p>
                        </form>
                        </p>
                        <div class="clr">
                        </div>
                        <p class="a cd">
                            We Respect Your Privacy</p>
                    </div>
                </div>
            </div>
            <!-----------end footer-->
            <div class="sub-footder fl">
                <div class="sub-s-footer">
                    <div class="fo-logo fl">
                        <p>
                            © Coppyright 2020-21</p>
                    </div>
                    <div class="f-nav fr">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Service</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Portfolio</a></li>
                        </ul>
                    </div>
                </div>
                <div class="clr">
                </div>
            </div>
        </div>
    </body>
</html>
