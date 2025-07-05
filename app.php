<link rel="stylesheet" href="./style/app.css?v=1">



<?php
    include "./conn_db.php";

    include "./products/product_card.php";


    $product_db = "SELECT * FROM products";
    $result = mysqli_query($conn, $product_db);

    if ($result && mysqli_num_rows($result) > 0) {

        echo "<div class='product-container'> ";
            while ($row = mysqli_fetch_assoc($result)) {
                echo productCard($row['title'], $row['price'], $row['image_url']);

            }
        echo "</div>";
    }


?>


