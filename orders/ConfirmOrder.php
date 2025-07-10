<link rel="stylesheet" href="../style/confirm_order.css?v=1">


<?php

    include "../conn_db.php";

    $title = $_POST['title'] ?? '';
    $price = $_POST['price'] ?? '';
    $product_id = $_POST['product_id'] ?? '';

    // if($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['buy_now'])) {
    //     echo 'success';
    // }

    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['submit_order'])) {

        $product_order_id = $_POST["product_id"];
        $customer_name = $_POST["username"];
        $customer_phone_number = $_POST["phone_number"];

        $submit_order = "INSERT INTO orders(product_id, customer_name, phone_number)
                         VALUES('$product_order_id', '$customer_name', '$customer_phone_number')";
        mysqli_query($conn, $submit_order);

        header("Location: ../App.php");
        exit;
    }


?>

<form method="post">
    <h3>Product Name : <?= $title ?> </h3>
    <p>Price : <?= $price ?>$</p>
    <input type="hidden" name='product_id' value="<?= $product_id ?>">
    <input placeholder="Name" type="text" name="username" required>
    <input placeholder="Phone number" type="text" name="phone_number" required>
    <button type="submit" name="submit_order">Submit Order</button>
</form>