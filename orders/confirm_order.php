

<?php

// connect to database 
include "../conn_db.php";

if($_SERVER["REQUEST_METHOD"] === "POST") {

    $product_order_id = $product_id;
    $customer_name = $_POST["username"];
    $customer_phone_number = $_POST["phone_number"];

    $submit_order = "INSERT INTO orders(productID, Customer Name, Customer Phone)
                    VALUES('$product_order_id', '$customer_name', '$customer_phone_number')";

    $conn->query($submit_order);
    header('Location: ../app.php');
    exit;
}



?>


<form method="post">
    <input type="hidden" value="<?= $product_id ?>">
    <input type="text" name="username" required>
    <input type="text" name="phone_number" required>
    <button type="submit">Submit Order</button>
</form>