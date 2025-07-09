
<link rel="stylesheet" href="../style/dashboard.css?=v1">


<?php

    // connect to database 
    include "../conn_db.php";

    // products data
    // include "product_data.php";

    // orders data
    include "order_data.php";

    // call table component
    include "table_component.php";



    // product table
    echo tableComponent(
        $conn, 
        'products', 
        ['Product ID', 'Product Name', 'Price', 'Post Date'], 
        ['product_id', 'title', 'price', 'created_at']
    );

    

?>





<a href="../app.php">Home</a>
<a href="../products/create_product.php">Create</a>
