<?php
require_once '../security/auth.php'; 
require_once '../config-db.php';
include '../layout/header.php';

$id = $_GET['id'];
$res = $conn->query("SELECT * FROM products WHERE id = '$id'");
$data = $res->fetch_assoc();

$categories = $conn->query("SELECT * FROM categories");
$brands = $conn->query("SELECT * FROM brands");
?>

<div class="container mt-5 mb-5">
    <div class="card shadow border-0 rounded-4 mx-auto" style="max-width: 700px;">
        <div class="card-header bg-warning text-white py-3">
            <h5 class="mb-0 fw-bold"><i class="bi bi-pencil-square me-2"></i>Edit Data Produk</h5>
        </div>
        <div class="card-body p-4">
            <form action="update.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $data['id']; ?>">
                
                <div class="mb-3">
                    <label class="form-label fw-semibold">Nama Produk</label>
                    <input type="text" name="name" class="form-control" value="<?= $data['name']; ?>" required>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-semibold">Kategori</label>
                        <select name="category_id" class="form-select" required>
                            <?php while($c = $categories->fetch_assoc()): ?>
                                <option value="<?= $c['id']; ?>" <?= ($c['id'] == $data['category_id']) ? 'selected' : ''; ?>>
                                    <?= $c['name']; ?>
                                </option>
                            <?php endwhile; ?>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-semibold">Brand</label>
                        <select name="brand_id" class="form-select" required>
                            <?php while($b = $brands->fetch_assoc()): ?>
                                <option value="<?= $b['id']; ?>" <?= ($b['id'] == $data['brand_id']) ? 'selected' : ''; ?>>
                                    <?= $b['name']; ?>
                                </option>
                            <?php endwhile; ?>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-semibold">Harga (Rp)</label>
                        <input type="number" name="price" class="form-control" value="<?= $data['price']; ?>" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-semibold">Tanggal Input</label>
                        <input type="datetime-local" name="created_at" class="form-control" 
                               value="<?= date('Y-m-d\TH:i', strtotime($data['created_at'])); ?>" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold">Deskripsi</label>
                    <textarea name="description" class="form-control" rows="3" required><?= $data['description']; ?></textarea>
                </div>

                <div class="mb-4">
                    <label class="form-label fw-semibold">Foto Produk</label>
                    <input type="file" name="image" class="form-control mb-2" accept="image/*">
                    <div class="p-2 border rounded bg-light text-center" style="width: 120px;">
                        <small class="text-muted d-block mb-1">Foto Saat Ini:</small>
                        <img src="../images/<?= $data['image']; ?>" width="100" class="rounded shadow-sm">
                    </div>
                    <small class="text-danger">*Kosongkan jika tidak ingin mengganti foto</small>
                </div>

                <div class="d-flex gap-2">
                    <a href="display.php" class="btn btn-secondary w-50">Batal</a>
                    <button type="submit" class="btn btn-warning w-50 text-white fw-bold">Update Produk</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include '../layout/footer.php'; ?>