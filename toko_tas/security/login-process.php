<?php
require_once '../config-db.php';
if (session_status() == PHP_SESSION_NONE) { session_start(); }

$username = $_POST['username'];

$password = md5($_POST['password']); 

$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$res = $conn->query($sql);

if ($res && $res->num_rows > 0) {
    $user = $res->fetch_assoc();
    $_SESSION['status'] = "login";
    $_SESSION['id_admin'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    $_SESSION['role'] = $user['role'];

    if ($user['role'] == 'admin') {
        header("Location: ../products/display.php");
    } else {
        header("Location: ../front-page.php");
    }
} else {
    header("Location: login.php?pesan=gagal");
}
exit();
?>