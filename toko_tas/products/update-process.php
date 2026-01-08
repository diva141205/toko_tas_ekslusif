<?php
require_once '../config-db.php';
if (session_status() == PHP_SESSION_NONE) { session_start(); }

if (!isset($_SESSION['status']) || $_SESSION['role'] != 'admin') {
    header("Location: ../security/login_choice.php");
    exit();
}

$id = $_POST['id'];
$name = $_POST['name'];
$category_id = $_POST['category_id'];
$brand_id = $_POST['brand_id'];
$price = $_POST['price'];
$description = $_POST['description'];

if (!empty($_FILES['image']['name'])) {
    $image = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $unique_name = time() . "_" . $image;
    move_uploaded_file($tmp_name, "../images/" . $unique_name);
    
    $sql = "UPDATE products SET name='$name', category_id='$category_id', brand_id='$brand_id', 
            price='$price', description='$description', image='$unique_name' WHERE id='$id'";
} else {
    $sql = "UPDATE products SET name='$name', category_id='$category_id', brand_id='$brand_id', 
            price='$price', description='$description' WHERE id='$id'";
}

if ($conn->query($sql)) {
    header("Location: display.php");
} else {
    echo "Error: " . $conn->error;
}
?>