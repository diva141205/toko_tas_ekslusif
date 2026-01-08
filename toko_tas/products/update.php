<?php
require_once '../security/auth.php'; 
require_once '../config-db.php';

$id          = $_POST['id'];
$name        = $_POST['name'];
$category_id = $_POST['category_id'];
$brand_id    = $_POST['brand_id'];
$price       = $_POST['price'];
$description = $_POST['description'];
$created_at  = $_POST['created_at'];

if (!empty($_FILES['image']['name'])) {
    $image_name = $_FILES['image']['name'];
    $unique_img = time() . "_" . $image_name;
    
    $query_lama = $conn->query("SELECT image FROM products WHERE id='$id'");
    $data_lama  = $query_lama->fetch_assoc();
    $foto_lama  = $data_lama['image'];
    
    if (file_exists("../images/" . $foto_lama) && !empty($foto_lama)) {
        unlink("../images/" . $foto_lama);
    }

    move_uploaded_file($_FILES['image']['tmp_name'], "../images/" . $unique_img);
    
    $sql = "UPDATE products SET 
            name='$name', 
            category_id='$category_id', 
            brand_id='$brand_id', 
            price='$price', 
            description='$description', 
            created_at='$created_at', 
            image='$unique_img' 
            WHERE id='$id'";
} else {
    $sql = "UPDATE products SET 
            name='$name', 
            category_id='$category_id', 
            brand_id='$brand_id', 
            price='$price', 
            description='$description', 
            created_at='$created_at' 
            WHERE id='$id'";
}

if ($conn->query($sql)) {
    header("Location: display.php?pesan=update_sukses");
    exit();
} else {
    echo "Gagal update: " . $conn->error;
}
?>