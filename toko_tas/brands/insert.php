<?php 
require_once '../config-db.php'; 
session_start();

if (isset($_POST['submit'])) {
    $brand_name = $_POST['brand_name'];
    $sql = "INSERT INTO brands (brand_name) VALUES ('$brand_name')";
    
    if ($conn->query($sql)) {
        header("Location: display.php");
    } else {
        echo "Error: " . $conn->error;
    }
}
?>