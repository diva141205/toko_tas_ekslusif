<?php 
require_once '../config-db.php'; 
session_start();

if (isset($_POST['submit'])) {
    $category_name = $_POST['category_name'];
    $sql = "INSERT INTO categories (category_name) VALUES ('$category_name')";
    
    if ($conn->query($sql)) {
        header("Location: display.php");
    } else {
        echo "Error: " . $conn->error;
    }
}
?>