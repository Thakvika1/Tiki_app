<link rel="stylesheet" href="./style/app.css">


<?php
    include "./conn_db.php";

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully! <br /><br />";



?>

