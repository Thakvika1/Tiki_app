<link rel="stylesheet" href="./style/app.css?v=2">


<?php

    // connect to database 
    include "./conn_db.php";

    // component product card
    include "./components/ProductCardComponent.php";


    $product_db = "SELECT * FROM products";

    // $query_product_db = $conn->query($product_db);
    $query_product_db = mysqli_query($conn, $product_db);

    if ($query_product_db && mysqli_num_rows($query_product_db) > 0) {

        echo "<div class='product-container'> ";
        //  while ($row_product_db = $query_product_db->fetch_object()) {
        //      $row_product_db->id
        // }
            while ($row_product_db = mysqli_fetch_assoc($query_product_db)) {
                echo productCard(
                        $row_product_db['title'],
                        $row_product_db['price'],
                        $row_product_db['image_url'],
                        $row_product_db['product_id']
                    );
            }
        echo "</div>";
    }


?>


