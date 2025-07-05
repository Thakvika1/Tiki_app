

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
            $imageUrl = "./uploads/" . $uniqueName;

            // Insert into DB
            $create_product = "INSERT INTO products(image_url, title, price)
                            VALUES('$imageUrl', '$title', '$price')";

            $conn->query($create_product);
            header('Location: ../admin/dashboard.php');
            exit;
        }
    }
?>


<link rel="stylesheet" href="../style/create_product.css?v=1">

<form action="" method="post" enctype="multipart/form-data">
    <input id="image" type="file" name="image" accept="image/*" required>
    <input type="text" name="title" required>
    <input type="text" name="price" required>
    <button type="submit">Create Product</button>
</form>

<!-- show image  -->
<img src="" id="myImg" alt="Preview">



<script>
    const imageInput = document.getElementById('image');
    const preview = document.getElementById('myImg');

    imageInput.addEventListener('change', function () {
        const file = this.files[0];

        if (file) {
            preview.src = URL.createObjectURL(file);
            preview.classList.add('show'); 
        }
    });
</script>

