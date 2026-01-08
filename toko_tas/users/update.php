<?php
require_once '../config-db.php';

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "UPDATE users SET name='$name', email='$email', password='$password' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: display.php");
} else {
    echo "Error: " . $conn->error;
}
?>