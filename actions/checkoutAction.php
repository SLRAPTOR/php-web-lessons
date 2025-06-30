<?php
session_start();
require_once('db_connect.php'); // Make sure to require your DB connection

// Initialize variables
$name = "";
$address = "";
$city = "";
$contactNo = "";
$email = "";
$username = "";
$password = "";
$cart = "";

// Collect POST data
if (isset($_POST['name'])) { $name = $_POST['name']; }
if (isset($_POST['address'])) { $address = $_POST['address']; }
if (isset($_POST['city'])) { $city = $_POST['city']; }
if (isset($_POST['contactno'])) { $contactNo = $_POST['contactno']; }
if (isset($_POST['email'])) { $email = $_POST['email']; }
if (isset($_POST['username'])) { $username = $_POST['username']; }
if (isset($_POST['password'])) { $password = $_POST['password']; }
if (isset($_SESSION['cart'])) { $cart = $_SESSION['cart']; }

// Validate required fields
if ($name == "" || $address == "" || $city == "" || $contactNo == "" || $cart == "") {
    header("Location: checkout.php?msg= inncorect Recquest ");
    die();
}

// Insert user into database
$insQuery = "INSERT INTO `users`(`name`,`address`,`contact_no`,`email`,`username`,`password`,`user_type`,`is_active`) VALUES(
    '".$conn->real_escape_string($name)."',
    '".$conn->real_escape_string($address)."',
    '".$conn->real_escape_string($contactNo)."',
    '".$conn->real_escape_string($email)."',
    '".$conn->real_escape_string($username)."',
    '".$conn->real_escape_string($password)."',
    '2','1'
)";
$result = $conn->query($insQuery);

if ($result === TRUE) {
    // Fetch the user ID
    $resultUser = $conn->query("SELECT id_users FROM users WHERE email='".$conn->real_escape_string($email)."'");
    $rowUser = $resultUser->fetch_assoc();
    $saved_user_id = $rowUser['id_users'];

    // Calculate cart total
    $totalAmu = 0.0;
    if (is_array($cart)) {
        foreach ($cart as $cartItem) {
            $productQuery = "SELECT * FROM products WHERE id_products = '".$conn->real_escape_string($cartItem[0])."'";
            $resultProduct = $conn->query($productQuery);
            if ($resultProduct && $resultProduct->num_rows > 0) {
                $rowProduct = $resultProduct->fetch_assoc();
                $rowamu = ($rowProduct['sell_price'] * $cartItem[1]);
                $totalAmu += $rowamu;
            }
        }
    }

    // Save invoice
    $saveInvoice = "INSERT INTO invoice(invoice_date,total_amount,invoice_to,invoice_checked_by,status) VALUES(
        NOW(), 
        '".$conn->real_escape_string($totalAmu)."',
        '".$conn->real_escape_string($saved_user_id)."',
        NULL,
        '2'
    )";
    $resultInvoice = $conn->query($saveInvoice);

    if ($resultInvoice === TRUE) {
        // Optionally clear the cart from session here: unset($_SESSION['cart']);
        // Proceed to payment form
        ?>
        <html>
        <body>
        <form method="post" action="https://sandbox.payhere.lk/pay/checkout">   
            <input type="hidden" name="merchant_id" value="1216675">    <!-- Replace with your Merchant ID -->
            <input type="hidden" name="return_url" value="http://localhost/return">
            <input type="hidden" name="cancel_url" value="http://localhost/cancel">
            <input type="hidden" name="notify_url" value="http://localhost/notify">  
            <br><br>Item Details<br>
            <input type="text" name="order_id" value="Order<?php echo time(); ?>">
            <input type="text" name="items" value="Cart Purchase"><br>
            <input type="text" name="currency" value="LKR">
            <input type="text" name="amount" value="<?php echo htmlspecialchars($totalAmu); ?>">  
            <br><br>Customer Details<br>
            <input type="text" name="first_name" value="<?php echo htmlspecialchars($name); ?>">
            <input type="text" name="last_name" value="Customer"><br>
            <input type="text" name="email" value="<?php echo htmlspecialchars($email); ?>">
            <input type="text" name="phone" value="<?php echo htmlspecialchars($contactNo); ?>"><br>
            <input type="text" name="address" value="<?php echo htmlspecialchars($address); ?>">
            <input type="text" name="city" value="<?php echo htmlspecialchars($city); ?>">
            <input type="hidden" name="country" value="Sri Lanka"><br><br> 
            <input type="submit" value="Buy Now">   
        </form> 
        </body>
        </html>
        <?php
    } else {
        echo 'Invoice error: ' . $conn->error;
    }
} else {
    echo 'User query error: ' . $conn->error;
}
?>