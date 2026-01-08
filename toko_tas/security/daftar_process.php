<?php
require_once '../config-db.php';

$name = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['password'];
$role = 'customers';

$sql = "INSERT INTO users (name, username, password, role) VALUES ('$name', '$username', '$password', '$role')";

if ($conn->query($sql)) {
    header("Location: login.php?pesan=terdaftar");
} else {
    echo "Error: " . $conn->error;
}
?>