<?php
require_once '../security/auth.php'; 
require_once '../config-db.php';
include '../layout/header.php';
?>

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $category_id = $_POST['category_id'];
    $description = $_POST['description'];
    $id_admin = $_SESSION['id_admin']; // Sangat Penting!

    // Proses Upload Gambar
    $image = $_FILES['image']['name'];
    $tmp = $_FILES['image']['tmp_name'];
    $path = "../images/" . $image;

    if (move_uploaded_file($tmp, $path)) {
        $sql = "INSERT INTO products (name, price, category_id, description, image, user_id) 
                VALUES ('$name', '$price', '$category_id', '$description', '$image', '$id_admin')";
        
        if ($conn->query($sql)) {
            header("Location: display.php");
            exit();
        } else {
            echo "Gagal simpan ke database: " . $conn->error;
        }
    } else {
        echo "Gagal upload gambar. Pastikan folder 'images' sudah dibuat.";
    }
}
?>