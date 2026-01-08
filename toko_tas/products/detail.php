<?php
require_once '../config-db.php';
if (session_status() == PHP_SESSION_NONE) { session_start(); }
include '../layout/header.php';

$id = $_GET['id'];
$sql = "SELECT p.*, c.name AS category_name, b.name AS brand_name 
        FROM products p 
        LEFT JOIN categories c ON p.category_id = c.id 
        LEFT JOIN brands b ON p.brand_id = b.id 
        WHERE p.id = '$id'";
$res = $conn->query($sql);
$row = $res->fetch_assoc();
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow-sm border-0 rounded-4 overflow-hidden">
                <div class="row g-0">
                    <div class="col-md-6">
                        <img src="../images/<?= $row['image']; ?>" class="img-fluid h-100 object-fit-cover">
                    </div>
                    <div class="col-md-6 p-5">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-2">
                                <li class="breadcrumb-item text-primary"><?= $row['brand_name']; ?></li>
                                <li class="breadcrumb-item active"><?= $row['category_name']; ?></li>
                            </ol>
                        </nav>
                        <h1 class="fw-bold mb-3"><?= $row['name']; ?></h1>
                        <h2 class="text-danger fw-bold mb-4">Rp <?= number_format($row['price'], 0, ',', '.'); ?></h2>
                        <hr>
                        <p class="text-muted lead mb-5"><?= nl2br($row['description']); ?></p>
                        <div class="d-grid gap-2">
                            <a href="https://wa.me/628123456789?text=Halo, saya tertarik dengan <?= $row['name']; ?>" class="btn btn-success btn-lg rounded-pill py-3">
                                <i class="bi bi-whatsapp me-2"></i> Hubungi Penjual
                            </a>
                            <a href="../front-page.php" class="btn btn-outline-secondary btn-lg rounded-pill py-3">
                                Kembali ke Katalog
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include '../layout/footer.php'; ?>