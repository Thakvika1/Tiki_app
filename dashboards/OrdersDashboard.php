

<?php
    // connect to database 
    include "../conn_db.php";

    // table component 
    // include "../components/TableComponent.php";

    // order table
    echo tableComponent(
        $conn, 
        'orders',
        'Orders', 
        ['Order ID', 'Product ID', 'Customer Name', 'Customer Phone', 'Order Date'], 
        ['order_id', 'product_id', 'customer_name', 'phone_number', 'created_at']
    );


?>