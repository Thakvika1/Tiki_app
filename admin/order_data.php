
<?php

// orders data
    $order_db = "SELECT * FROM orders";
    $query_order_db = mysqli_query($conn, $order_db);

    if($query_order_db && mysqli_num_rows($query_order_db) > 0) {
        echo '
            <table border="2">
                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Product ID</th>
                        <th>Customer Name</th>
                        <th>Customer Phone</th>
                        <th>Order Date</th>
                    </tr>
                </thead>
                <tbody>
        ';

        while ($row_order_db = mysqli_fetch_assoc($query_order_db)) {
            echo '
                <tr class="values">
                    <td>' . $row_order_db['order_id'] . '</td>
                    <td>' . $row_order_db['product_id'] . '</td>
                    <td>' . $row_order_db['customer_name'] . '</td>
                    <td>' . $row_order_db['phone_number'] . '</td>
                    <td>' . $row_order_db['created_at'] . '</td>
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