

<?php


// products data
    $product_db = "SELECT * FROM products";
    $query_product_db = mysqli_query($conn, $product_db);

    if ($query_product_db && mysqli_num_rows($query_product_db) > 0) {
        echo '
            <table border="2">
                <thead>
                    <tr>
                        <th>Product ID</th>
                        <th>Title</th>
                        <th>Price</th>
                        <th>Post Date</th>
                    </tr>
                </thead>
                <tbody>
        ';

        while ($row_product_db = mysqli_fetch_assoc($query_product_db)) {
            echo '
                <tr class="values">
                    <td>' . $row_product_db['product_id'] . '</td>
                    <td>' . $row_product_db['title'] . '</td>
                    <td>' . $row_product_db['price'] . '</td>
                    <td>' . $row_product_db['created_at'] . '</td>
                </tr>
            ';
        }
        echo '
            </tbody>
                </table>
                <br /><br />
        ';
    }

?>