<?php
require_once 'config-db.php';
if (session_status() == PHP_SESSION_NONE) { session_start(); }
include 'layout/header.php';
?>

<div class="container mt-5">
    <div class="text-center mb-5">
        <h1 class="fw-bold">Koleksi Tas Eksklusif</h1>
        <p class="text-muted">Temukan gaya terbaikmu dengan koleksi terbaru kami</p>
    </div>

    <div class="row g-4">
        <?php
        $sql = "SELECT p.*, b.name AS brand_name FROM products p 
                LEFT JOIN brands b ON p.brand_id = b.id 
                ORDER BY p.id DESC";
        $res = $conn->query($sql);
        
        if ($res && $res->num_rows > 0):
            while ($row = $res->fetch_assoc()): ?>
            <div class="col-md-4 col-lg-3">
                <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden card-hover">
                    <img src="images/<?= $row['image']; ?>" class="card-img-top object-fit-cover" style="height: 250px;">
                    <div class="card-body p-4">
                        <small class="text-primary fw-bold text-uppercase"><?= $row['brand_name']; ?></small>
                        <h5 class="card-title fw-bold mt-1"><?= $row['name']; ?></h5>
                        <p class="text-danger fw-bold fs-5 mb-3">Rp <?= number_format($row['price'], 0, ',', '.'); ?></p>
                        <a href="products/detail.php?id=<?= $row['id']; ?>" class="btn btn-outline-primary w-100 rounded-pill">
                            Lihat Detail
                        </a>
                    </div>
                </div>
            </div>
            <?php endwhile; 
        else: ?>
            <div class="col-12 text-center py-5">
                <p class="text-muted">Belum ada produk untuk ditampilkan.</p>
            </div>
        <?php endif; ?>
    </div>
</div>

<style>
.card-hover { transition: transform 0.3s ease, shadow 0.3s ease; }
.card-hover:hover { transform: translateY(-10px); box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important; }
</style>

<?php include 'layout/footer.php'; ?>