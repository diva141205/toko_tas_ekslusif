<?php 
require_once '../config-db.php'; 
include '../layout/header.php'; 
cek_akses(); 
?>

<div class="container">
    <div class="card card-custom p-4 col-md-6 mx-auto shadow">
        <h4 class="fw-bold mb-3">Tambah Merk Baru</h4>
        <form action="insert.php" method="POST">
            <div class="mb-3">
                <label class="form-label">Nama Merk</label>
                <input type="text" name="brand_name" class="form-control" placeholder="Contoh: Gucci, Eiger, dll" required>
            </div>
            <button type="submit" name="submit" class="btn btn-primary w-100">Simpan Merk</button>
            <a href="display.php" class="btn btn-link w-100 mt-2 text-decoration-none text-muted">Batal</a>
        </form>
    </div>
</div>

<?php include '../layout/footer.php'; ?>