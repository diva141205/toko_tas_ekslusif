<?php
require_once '../config-db.php';
session_start();

if (isset($_SESSION['user_id']) && isset($_GET['id'])) {
    $id = $_GET['id'];
    $conn->query("DELETE FROM brands WHERE id = '$id'");
}

header("Location: display.php");
?>