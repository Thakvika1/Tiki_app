

<?php
    function productCard($title, $price, $image) {
        echo "
            <div class='product'>
                <img id='image' src='$image' />
                <h3>$title</h3>
                <p>$$price</p>
            </div>
        ";
    }

?>

