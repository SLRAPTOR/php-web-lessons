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
    <div style="width:25%" ><h2>EX PHARMACY</h2></div>
    <div style="width:60%">
         <form method="get" action="searchProducts.php">
                <input type="text" name="keyword" value="<?php echo $keyword;?>" />
                
                <input type="submit" value="search" />
            </form>
    </div>
    
</header><hr>
   <?php
            if (isset($_GET['msg'])) {
                ?>
            <p style="color: red"><?php echo $_GET['msg']; ?></p>

                <?php
            }
            ?>
<hr>
