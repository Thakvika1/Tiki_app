
<link rel="stylesheet" href="../style/dashboard.css?=v1">


<?php

    include "../conn_db.php";


    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully! <br /><br />";

    $product_db = "SELECT * FROM products";
    $result = mysqli_query($conn, $product_db);

    if ($result && mysqli_num_rows($result) > 0) {
        echo '
            <table border="2">
                <thead>
                    <tr>
                        <th>Product ID</th>
                        <th>Title</th>
                        <th>Price</th>
                        <th>Create at</th>
                    </tr>
                </thead>
                <tbody>
        ';

        while ($row = mysqli_fetch_assoc($result)) {
            echo '
                <tr id="values">
                    <td>' . $row['product_id'] . '</td>
                    <td>' . $row['title'] . '</td>
                    <td>' . $row['price'] . '</td>
                    <td>' . $row['created_at'] . '</td>
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




<a href="../app.php">Home</a>
<a href="../products/create_product.php">Create</a>
