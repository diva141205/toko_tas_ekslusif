<?php 
require_once '../security/auth.php'; 
require_once '../config-db.php'; 
include '../layout/header.php'; 

$role = $_SESSION['role'];
?>

<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-bold mb-0">Manajemen Inventaris</h2>
            <p class="text-muted small">Kelola produk, kategori, dan brand dalam satu dashboard</p>
        </div>
        <?php if ($role == 'admin'): ?>
        <a href="insert-form.php" class="btn btn-primary shadow-sm">
            <i class="bi bi-plus-lg"></i> Tambah Produk
        </a>
        <?php endif; ?>
    </div>

    <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="bg-light">
                    <tr>
                        <th class="ps-4">Produk</th>
                        <th>Brand & Kategori</th>
                        <th>Harga</th>
                        <th>Tanggal Input</th>
                        <th class="text-center pe-4">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Query untuk mengambil data produk beserta nama brand dan kategori
                    $sql = "SELECT p.*, c.name AS category_name, b.name AS brand_name 
                            FROM products p 
                            LEFT JOIN categories c ON p.category_id = c.id 
                            LEFT JOIN brands b ON p.brand_id = b.id
                            ORDER BY p.id DESC";
                    
                    $res = $conn->query($sql);
                    
                    if ($res && $res->num_rows > 0):
                        while ($row = $res->fetch_assoc()): ?>
                        <tr>
                            <td class="ps-4">
                                <div class="d-flex align-items-center">
                                    <img src="../images/<?= $row['image']; ?>" width="50" height="50" class="rounded-3 object-fit-cover shadow-sm me-3">
                                    <div class="fw-bold text-dark"><?= $row['name']; ?></div>
                                </div>
                            </td>
                            <td>
                                <span class="badge rounded-pill bg-secondary bg-opacity-10 text-secondary border border-secondary border-opacity-25 me-1">
                                    <?= $row['brand_name'] ?? 'No Brand'; ?>
                                </span>
                                <span class="badge rounded-pill bg-info bg-opacity-10 text-info border border-info border-opacity-25">
                                    <?= $row['category_name'] ?? 'Uncategorized'; ?>
                                </span>
                            </td>
                            <td>
                                <span class="fw-bold text-danger">Rp <?= number_format($row['price'], 0, ',', '.'); ?></span>
                            </td>
                            <td>
                                <div class="text-muted small">
                                    <i class="bi bi-calendar3"></i> 
                                    <?= date('d M Y', strtotime($row['created_at'])); ?>
                                </div>
                            </td>
                            <td class="text-center pe-4">
                                <div class="btn-group">
                                    <a href="detail.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-light border">Detail</a>
                                    
                                    <?php if ($role == 'admin'): ?>
                                    <a href="update-form.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-light border text-warning">Edit</a>
                                    <a href="delete.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-light border text-danger" onclick="return confirm('Hapus produk ini?')">Hapus</a>
                                    <?php endif; ?>
                                </div>
                            </td>
                        </tr>
                        <?php endwhile; 
                    else: ?>
                        <tr>
                            <td colspan="5" class="text-center py-5 text-muted">
                                Belum ada data produk tersedia.
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include '../layout/footer.php'; ?>