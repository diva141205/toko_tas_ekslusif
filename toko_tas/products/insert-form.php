<?php
require_once '../security/auth.php'; 
require_once '../config-db.php';
include '../layout/header.php';
?>

<div class="container">
    <div class="card card-custom p-4 col-md-8 mx-auto shadow">
        <h3 class="fw-bold mb-4">Tambah Produk Baru</h3>
        <form action="insert.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label class="form-label fw-bold">Nama Produk</label>
                <input type="text" name="name" class="form-control" placeholder="Masukkan nama tas" required>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label fw-bold">Harga (Rp)</label>
                    <input type="number" name="price" class="form-control" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label fw-bold">Kategori</label>
                    <select name="category_id" class="form-select" required>
                        <option value="">Pilih Kategori</option>
                        <?php
                        $cats = $conn->query("SELECT * FROM categories");
                        while($cat = $cats->fetch_assoc()) {
                            // PERBAIKAN: Menggunakan $cat['name'] sesuai kolom di database
                            echo "<option value='".$cat['id']."'>".$cat['name']."</option>";
                        }
                        ?>
                    </select>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Deskripsi</label>
                <textarea name="description" class="form-control" rows="3" placeholder="Jelaskan detail tas..."></textarea>
            </div>

            <div class="mb-4">
                <label class="form-label fw-bold">Foto Produk</label>
                <input type="file" name="image" class="form-control" accept="image/*" required>
            </div>

            <div class="d-flex gap-2">
                <button type="submit" name="submit" class="btn btn-primary px-4 fw-bold">Simpan Produk</button>
                <a href="display.php" class="btn btn-light px-4">Batal</a>
            </div>
        </form>
    </div>
</div>

<?php include '../layout/footer.php'; ?>