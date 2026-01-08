<?php
require_once '../security/auth.php'; 
require_once '../config-db.php';

$id = $_GET['id'];

$query_foto = $conn->query("SELECT image FROM products WHERE id='$id'");
$data_foto  = $query_foto->fetch_assoc();
$nama_foto  = $data_foto['image'];

if (file_exists("../images/" . $nama_foto) && !empty($nama_foto)) {
    unlink("../images/" . $nama_foto);
}

$sql = "DELETE FROM products WHERE id='$id'";

if ($conn->query($sql)) {
    header("Location: display.php?pesan=hapus_sukses");
    exit();
} else {
    echo "Gagal hapus: " . $conn->error;
}
?>