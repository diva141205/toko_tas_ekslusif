<?php
require_once '../config-db.php';
if (session_status() == PHP_SESSION_NONE) { session_start(); }

if (!isset($_SESSION['status']) || $_SESSION['role'] != 'admin') {
    header("Location: ../security/login_choice.php");
    exit();
}

$name = $_POST['name'];
$category_id = $_POST['category_id'];
$brand_id = $_POST['brand_id'];
$price = $_POST['price'];
$description = $_POST['description'];
$user_id = $_SESSION['id_admin']; 
$created_at = date('Y-m-d H:i:s'); 

$image = $_FILES['image']['name'];
$tmp_name = $_FILES['image']['tmp_name'];
$target_dir = "../images/";
$unique_name = time() . "_" . $image;

if (move_uploaded_file($tmp_name, $target_dir . $unique_name)) {
    $sql = "INSERT INTO products (name, category_id, brand_id, price, description, image, user_id, created_at) 
            VALUES ('$name', '$category_id', '$brand_id', '$price', '$description', '$unique_name', '$user_id', '$created_at')";

    if ($conn->query($sql)) {
        header("Location: display.php");
    } else {
        echo "Error: " . $conn->error;
    }
} else {
    echo "Gagal mengunggah gambar.";
}
?>