
<?php

    include "../conn_db.php";


    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully! <br /><br />";

?>


<link rel="stylesheet" href="../style/dashboard.css">



<a href="../app.php">Home</a>
<a href="../products/create_product.php">Create</a>
