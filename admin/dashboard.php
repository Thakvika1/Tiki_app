
<link rel="stylesheet" href="../style/dashboard.css?=v1">


<?php

    // connect to database 
    include "../conn_db.php";

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully! <br /><br />";



    // products data
    include "product_data.php";

    // orders data
    include "order_data.php";

?>




<a href="../app.php">Home</a>
<a href="../products/create_product.php">Create</a>
