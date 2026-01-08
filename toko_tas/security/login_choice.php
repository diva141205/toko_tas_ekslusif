<?php
include '../layout/header.php';
?>

<div class="container mt-5">
    <div class="row justify-content-center text-center">
        <div class="col-md-8">
            <h2 class="fw-bold mb-3">Selamat Datang di Toko Tas</h2>
            <p class="text-muted mb-5">Silakan pilih akses masuk Anda untuk melanjutkan</p>
            
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="card h-100 border-0 shadow-sm rounded-4 p-4 card-hover">
                        <div class="card-body">
                            <div class="display-4 text-primary mb-3">
                                <i class="bi bi-person-badge"></i>
                            </div>
                            <h4 class="fw-bold">Administrator</h4>
                            <p class="text-muted small mb-4">Akses khusus untuk mengelola stok, brand, dan kategori produk.</p>
                            <a href="login.php" class="btn btn-primary w-100 rounded-pill">Login Admin</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card h-100 border-0 shadow-sm rounded-4 p-4 card-hover">
                        <div class="card-body">
                            <div class="display-4 text-success mb-3">
                                <i class="bi bi-bag-heart"></i>
                            </div>
                            <h4 class="fw-bold">Pelanggan</h4>
                            <p class="text-muted small mb-4">Lihat koleksi tas terbaru dan lakukan pemesanan dengan mudah.</p>
                            <a href="login.php" class="btn btn-success w-100 rounded-pill">Login Pelanggan</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-5">
                <a href="../front-page.php" class="text-decoration-none text-secondary">
                    <i class="bi bi-arrow-left"></i> Kembali ke Halaman Utama
                </a>
            </div>
        </div>
    </div>
</div>

<style>
.card-hover { transition: transform 0.3s ease; }
.card-hover:hover { transform: translateY(-10px); }
</style>

<?php include '../layout/footer.php'; ?>