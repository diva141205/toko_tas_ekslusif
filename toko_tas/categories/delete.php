<?php
require_once '../config-db.php';
session_start();
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $conn->query("DELETE FROM categories WHERE id = '$id'");
}
header("Location: display.php");
?>