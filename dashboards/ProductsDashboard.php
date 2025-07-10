
<?php

    // connect to database 
    include "../conn_db.php";

    // table component
    include "../components/TableComponent.php";

    // product table
    echo tableComponent(
        $conn, 
        'products', 
        'Products',
        ['Product ID', 'Product Name', 'Price', 'Post Date'], 
        ['product_id', 'title', 'price', 'created_at']
    );

?>