
<link rel="stylesheet" href="../style/dashboard.css?=v1">


<?php

    include "../conn_db.php";


    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully! <br /><br />";


    // products data
    $product_db = "SELECT * FROM products";
    $query_product_db = mysqli_query($conn, $product_db);

    if ($query_product_db && mysqli_num_rows($query_product_db) > 0) {
        echo '
            <table border="2">
                <thead>
                    <tr>
                        <th>Product ID</th>
                        <th>Title</th>
                        <th>Price</th>
                        <th>Create at</th>
                    </tr>
                </thead>
                <tbody>
        ';

        while ($row_product_db = mysqli_fetch_assoc($query_product_db)) {
            echo '
                <tr id="values">
                    <td>' . $row_product_db['product_id'] . '</td>
                    <td>' . $row_product_db['title'] . '</td>
                    <td>' . $row_product_db['price'] . '</td>
                    <td>' . $row_product_db['created_at'] . '</td>
                </tr>
            ';
        }
        echo '
            </tbody>
                </table>
                <br /><br />
        ';
    }

    // orders data
    $order_db = "SELECT * FROM orders";
    $query_order_db = mysqli_query($conn, $order_db);

    if($query_order_db && mysqli_num_rows($query_order_db) > 0) {
        echo '
            <table border="2">
                <thead>
                    <tr>
                        <th>Product ID</th>
                        <th>Title</th>
                        <th>Price</th>
                        <th>Create at</th>
                    </tr>
                </thead>
                <tbody>
        ';

        while ($row_order_db = mysqli_fetch_assoc($query_product_db)) {

        }
    }

?>




<a href="../app.php">Home</a>
<a href="../products/create_product.php">Create</a>
