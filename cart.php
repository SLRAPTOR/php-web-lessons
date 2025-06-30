<?php
session_start();
include './actions/dbconnection.php';
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Shopping Cart</title>
    </head>
    <body>
        <?php include './header.php'; ?>
        <h2>Shopping Cart</h2>
        <table border="1" cellpadding="10">
            <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Subtotal</th>
                <th>Remove</th>
            </tr>
            <?php
            $totalAmou = 0.0;
            $isProduct = false;

            if (isset($_SESSION['cart'])) {
                $cart = $_SESSION['cart'];
                foreach ($cart as $cartItem) {
                    $productQuery = "SELECT * FROM products WHERE id_products = '" . $cartItem[0] . "'";
                    $result = $conn->query($productQuery);

                    if ($result && $result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        $rowamu = ($row['sell_price'] * $cartItem[1]);
                        $totalAmou += $rowamu;
                        $isProduct = true;
                        ?>
                        <tr>
                            <td><?php echo $cartItem[0]; ?></td>
                            <td><img src="<?php echo "actions/" . $row["product_profile_image"]; ?>" width="90" height="90"></td>
                            <td><?php echo $row['product_name']; ?></td>
                            <td><?php echo $row['product_description']; ?></td>
                            <td><?php echo $row['sell_price']; ?></td>
                            <td><?php echo $cartItem[1]; ?></td>
                            <td><?php echo $rowamu; ?></td>
                            <td>
                                <a href="actions/removeFromCart.php?pid=<?php echo $cartItem[0]; ?>">
                                    <input type="button" value="Remove">
                                </a>
                            </td>
                        </tr>
                        <?php
                    }
                }
            }

            if (!$isProduct) {
                echo "<tr><td colspan='8'>Cart is empty.</td></tr>";
            }
            ?>
        </table>
        <br>
        <label>Total: <?php echo $totalAmou ?></label>
        <a href="checkout.php"><input type="button" value="Checkout"></a>
        <?php # include './footer.php'; ?>
    </body>
</html>