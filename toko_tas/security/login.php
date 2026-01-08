<?php
include '../layout/header.php';
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card shadow-sm border-0 rounded-4">
                <div class="card-body p-4">
                    <h4 class="fw-bold text-center mb-4">Login Toko Tas</h4>
                    <?php if(isset($_GET['pesan']) && $_GET['pesan'] == 'gagal'): ?>
                        <div class="alert alert-danger small text-center">Username atau Password salah!</div>
                    <?php endif; ?>
                    <form action="login-process.php" method="POST">
                        <div class="mb-3">
                            <label class="form-label small">Username</label>
                            <input type="text" name="username" class="form-control" required>
                        </div>
                        <div class="mb-4">
                            <label class="form-label small">Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100 py-2">Masuk</button>
                    </form>
                    <div class="text-center mt-3">
                        <small class="text-muted">Belum punya akun? <a href="daftar_pelanggan.php">Daftar di sini</a></small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include '../layout/footer.php'; ?>