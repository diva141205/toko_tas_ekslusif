<?php 
require_once '../config-db.php'; 
include '../layout/header.php'; 
cek_akses(); 

$id = $_GET['id'];
$res = $conn->query("SELECT * FROM brands WHERE id='$id'");
$data = $res->fetch_assoc();

if (!$data) { header("Location: display.php"); exit(); }
?>

<div class="container">
    <div class="card card-custom p-4 col-md-6 mx-auto shadow">
        <h4 class="fw-bold mb-3">Edit Merk</h4>
        <form action="update.php" method="POST">
            <input type="hidden" name="id" value="<?= $data['id'] ?>">
            <div class="mb-3">
                <label class="form-label">Nama Merk</label>
                <input type="text" name="brand_name" class="form-control" value="<?= $data['brand_name'] ?>" required>
            </div>
            <button type="submit" name="update" class="btn btn-warning w-100">Update Merk</button>
            <a href="display.php" class="btn btn-link w-100 mt-2 text-decoration-none text-muted">Batal</a>
        </form>
    </div>
</div>

<?php include '../layout/footer.php'; ?>