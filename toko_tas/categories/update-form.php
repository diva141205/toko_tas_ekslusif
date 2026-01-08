<?php 
require_once '../config-db.php'; 
include '../layout/header.php'; 
cek_akses(); 
$id = $_GET['id'];
$data = $conn->query("SELECT * FROM categories WHERE id='$id'")->fetch_assoc();
?>
<div class="container">
    <div class="card card-custom p-4 col-md-6 mx-auto shadow">
        <h4 class="fw-bold mb-3">Edit Kategori</h4>
        <form action="update.php" method="POST">
            <input type="hidden" name="id" value="<?= $data['id'] ?>">
            <div class="mb-3">
                <input type="text" name="category_name" class="form-control" value="<?= $data['category_name'] ?>" required>
            </div>
            <button type="submit" name="update" class="btn btn-warning w-100">Update</button>
        </form>
    </div>
</div>
<?php include '../layout/footer.php'; ?>