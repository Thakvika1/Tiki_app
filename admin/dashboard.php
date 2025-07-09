
<link rel="stylesheet" href="../style/dashboard.css?=v1">


<?php

    // connect to database 
    include "../conn_db.php";

    // call table component
    include "table_component.php";



    // product table
    echo tableComponent(
        $conn, 
        'products', 
        'Products',
        ['Product ID', 'Product Name', 'Price', 'Post Date'], 
        ['product_id', 'title', 'price', 'created_at']
    );

    // order table
    echo tableComponent(
        $conn, 
        'orders',
        'Orders', 
        ['Order ID', 'Product ID', 'Customer Name', 'Customer Phone', 'Order Date'], 
        ['order_id', 'product_id', 'customer_name', 'phone_number', 'created_at']
    );

?>


<a href="../app.php">Home</a>
<a href="../products/create_product.php">Create</a>
