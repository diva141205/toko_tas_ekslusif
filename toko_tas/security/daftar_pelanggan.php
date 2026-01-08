<?php
include '../layout/header.php';
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card shadow-sm border-0 rounded-4">
                <div class="card-body p-4">
                    <h4 class="fw-bold text-center mb-4">Daftar Akun Baru</h4>
                    <form action="daftar_process.php" method="POST">
                        <div class="mb-3">
                            <label class="form-label small">Nama Lengkap</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label small">Username</label>
                            <input type="text" name="username" class="form-control" required>
                        </div>
                        <div class="mb-4">
                            <label class="form-label small">Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-success w-100 py-2">Daftar Sekarang</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include '../layout/footer.php'; ?>