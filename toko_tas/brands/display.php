<?php 
require_once '../config-db.php'; 
include '../layout/header.php'; 
cek_akses(); 
?>

<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold">Master Merk (Brands)</h2>
        <a href="insert-form.php" class="btn btn-primary btn-sm">+ Tambah Merk</a>
    </div>

    <div class="table-responsive bg-white p-3 rounded shadow-sm col-md-8 mx-auto">
        <table class="table table-hover">
            <thead class="table-light">
                <tr>
                    <th>ID</th>
                    <th>Nama Merk</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $res = $conn->query("SELECT * FROM brands");
                while ($row = $res->fetch_assoc()): ?>
                <tr>
                    <td><?= $row['id']; ?></td>
                    <td class="fw-bold"><?= $row['brand_name']; ?></td>
                    <td class="text-center">
                        <a href="delete.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Hapus merk ini?')">Hapus</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</div>

<?php include '../layout/footer.php'; ?>