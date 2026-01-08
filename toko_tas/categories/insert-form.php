<?php 
require_once '../config-db.php'; 
include '../layout/header.php'; 
?>
<div class="container mt-4">
    <div class="card p-4 mx-auto shadow-sm" style="max-width: 500px;">
        <h4 class="fw-bold mb-3">Tambah Kategori Baru</h4>
        <form action="insert.php" method="POST">
            <div class="mb-3">
                <label class="form-label">Nama Kategori</label>
                <input type="text" name="category_name" class="form-control" required>
            </div>
            <button type="submit" name="submit" class="btn btn-primary w-100">Simpan Kategori</button>
        </form>
    </div>
</div>
<?php include '../layout/footer.php'; ?>