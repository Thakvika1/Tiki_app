

<link rel="stylesheet" href="../style/create_product.css">

<?php

function productCard($title, $price, $image) {
    echo "
    <div class='product'>
        <img src='$image' />
        <h3>$title</h3>
        <p>$$price</p>
    </div>";
}


?>