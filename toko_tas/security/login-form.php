<?php 
require_once '../config-db.php';
include '../layout/header.php'; 

$type = isset($_GET['type']) ? $_GET['type'] : 'pelanggan';
$title = ($type == 'admin') ? 'Admin Toko' : 'Pelanggan';
?>

<div class="container d-flex align-items-center justify-content-center vh-100">
    <div class="card shadow-lg border-0 rounded-4 p-4" style="width: 400px;">
        <div class="text-center mb-4">
            <h3 class="fw-bold">Login <?= $title ?></h3>
            <small class="text-muted">Masukkan akun anda untuk masuk ke sistem</small>
        </div>
        
        <?php if(isset($_GET['msg']) && $_GET['msg'] == 'failed') : ?>
            <div class="alert alert-danger py-2 small text-center">Login Gagal! Username atau Password salah.</div>
        <?php endif; ?>

        <form action="login-process.php" method="POST">
            <input type="hidden" name="role" value="<?= $type ?>">
            <div class="mb-3">
                <label class="form-label small fw-bold">Username / Email</label>
                <input type="text" name="username" class="form-control rounded-pill" required>
            </div>
            <div class="mb-3">
                <label class="form-label small fw-bold">Password</label>
                <input type="password" name="password" class="form-control rounded-pill" required>
            </div>
            <button type="submit" name="submit" class="btn btn-primary w-100 rounded-pill py-2 shadow-sm">Sign In</button>
        </form>

        <?php if($type == 'pelanggan'): ?>
        <div class="text-center mt-3">
            <small class="text-muted">Belum punya akun? <a href="daftar_pelanggan.php" class="text-decoration-none fw-bold">Daftar di sini</a></small>
        </div>
        <?php endif; ?>
        
        <div class="text-center mt-2">
            <a href="login_choice.php" class="text-decoration-none small text-muted">Kembali</a>
        </div>
    </div>
</div>

<?php include '../layout/footer.php'; ?>