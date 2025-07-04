
<link rel="stylesheet" href="../style/create_product.css">

<?php
    include "../conn_db.php";


    if ($_SERVER["REQUEST_METHOD"] === "POST") {

        $title = $_POST['title'];
        $price = $_POST['price'];

        // Handle file upload
        $image = $_FILES['image']; 
        $imageTmp = $image['tmp_name'];
        $uniqueName = uniqid() . "_" . basename($image['name']);
        $uploadPath = "../uploads/" . $uniqueName;


        if (move_uploaded_file($imageTmp, $uploadPath)) {

            // Store relative path for DB
            $imageUrl = "../uploads/" . $uniqueName;

            // Insert into DB
            $create_product = "INSERT INTO products(image_url, title, price)
                            VALUES('$imageUrl', '$title', '$price')";

            $conn->query($create_product);
            header('Location: ../admin/dashboard.php');
            exit;
        }
    }
?>



<form action="" method="post" enctype="multipart/form-data">
    <input id="image" type="file" name="image" accept="image/*" required>
    <input type="text" name="title" required>
    <input type="text" name="price" required>
    <button type="submit">Create Product</button>
</form>
<img src="" id="myImg" alt="">



<script>
    const imageInput = document.getElementById('image');

    imageInput.addEventListener('change', function() {

    const files = this.files;
    
    document.getElementById('myImg').src = URL.createObjectURL(files[0]);
    document.getElementById('myImg').style.width = '200px';
    document.getElementById('myImg').style.height = '200px';
    document.getElementById('myImg').style.objectFit = 'cover';
    document.getElementById('myImg').style.borderRadius = '10px';
    document.getElementById('myImg').style.marginTop = '10px';
    document.getElementById('myImg').style.display = 'block';
    });
</script>
