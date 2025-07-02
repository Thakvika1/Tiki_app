<link rel="stylesheet" href="../style/sign_up.css">

<?php 
    include "../conn_db.php";

    $conn = mysqli_connect($host, $user, $password, $database);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully! <br /><br />";

?>