<style>
    .center{
        display: flex;
        align-items: center;
        justify-content: center;
        justify-content: space-between;
        background-color: activeborder;
    }
    .menu{
        display: flex;
        align-items: center;
        justify-content: center;
        justify-content: space-between;
        width: 350px;
        list-style-type: none;
    }


</style>


<header class="center">
    <div style="width:25%" ><h2>CODEFEST-2021</h2></div>
    <div style="width:60%">
        <ul class="menu">
            <li>home</li>
            <li>advanced search</li>
            <li>about us</li>
            <li>contact us</li>
        </ul>
    </div>
    <div style="width:20%" >login/register</div>
</header><hr>
   <?php
            if (isset($_GET['msg'])) {
                ?>
            <p style="color: red"><?php echo $_GET['msg']; ?></p>

                <?php
            }
            ?>
<hr>
<?php


$keyword = "";
if (isset($_GET['keyword'])) {
    $keyword = $_GET['keyword'];
}
?>
<style>
    .center{
        display: flex;
        align-items: center;
        justify-content: center;
        justify-content: space-between;
        background-color: activeborder;
    }
    .menu{
        display: flex;
        align-items: center;
        justify-content: center;
        justify-content: space-between;
        width: 350px;
        list-style-type: none;
    }


</style>


<header class="center">
    <div style="width:25%" ><b><i>EX PHARMACY</i></b></div>
    <div style="width:50%">
        <form method="get" action="search.php">
                <input type="text" name="keyword" value="<?php echo $keyword;?>" />

                <input type="submit" value="search" />
            </form>
    </div>


    <div><a href="login.php">Login</a></div>
</header><hr>
   <?php
            if (isset($_GET['msg'])) {
                ?>
            <p style="color: red"><?php echo $_GET['msg']; ?></p>

                <?php
            }
            ?>
<hr>
