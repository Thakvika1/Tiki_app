

<?php
    function productCard($title, $price, $image, $product_id) {
        echo "
            <div class='product'>
                <img id='image' src='$image' />
                <h3>$title</h3>
                <p>$$price</p>
                <form method='get' action='../orders/confirm_order.php'>
                    <input value='$product_id' type='hidden' />
                    <button name='add_to_card' type='submit'>Add To Cart</button>
                    <button name='buy_now' type='submit'>Buy Now</button>
                </form>
            </div>
        ";
    }

?>

