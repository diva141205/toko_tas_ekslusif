<?php 
require_once '../config-db.php'; 
session_start();

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $brand_name = $_POST['brand_name'];
    $sql = "UPDATE brands SET brand_name='$brand_name' WHERE id='$id'";
    
    if ($conn->query($sql)) {
        header("Location: display.php");
    }
}
?>