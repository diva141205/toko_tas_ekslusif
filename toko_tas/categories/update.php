<?php 
require_once '../config-db.php'; 
session_start();
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['category_name'];
    $conn->query("UPDATE categories SET category_name='$name' WHERE id='$id'");
    header("Location: display.php");
}
?>