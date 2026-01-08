<?php
if (session_status() == PHP_SESSION_NONE) { session_start(); }

if (!isset($_SESSION['status']) || $_SESSION['role'] != 'admin') {
    header("Location: ../security/login.php?pesan=denied");
    exit();
}
?>