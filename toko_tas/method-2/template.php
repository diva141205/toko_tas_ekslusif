<?php
function template_header() {
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard Colorful</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f3f4f6; /* Abu-abu sangat muda */
            min-height: 100vh;
        }

        /* SIDEBAR COLORFUL GRADIENT */
        .sidebar {
            min-height: 100vh;
            /* Gradien Biru ke Ungu */
            background: linear-gradient(135deg, #4e54c8 0%, #8f94fb 100%);
            color: white;
            padding-top: 30px;
            box-shadow: 4px 0 15px rgba(0,0,0,0.1);
            z-index: 100;
        }

        /* Branding Toko */
        .sidebar-brand {
            font-weight: 700;
            font-size: 1.5rem;
            text-align: center;
            margin-bottom: 30px;
            color: #fff;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.2);
        }

        /* Link Menu Sidebar */
        .sidebar a {
            color: rgba(255,255,255,0.8); /* Putih agak transparan */
            text-decoration: none;
            display: block;
            padding: 12px 20px;
            margin: 8px 15px;
            border-radius: 30px; /* Membuat tombol lonjong */
            transition: all 0.3s ease;
            font-weight: 500;
        }

        /* Efek Hover Menu */
        .sidebar a:hover {
            background-color: rgba(255, 255, 255, 0.2); /* Latar putih transparan */
            color: white;
            transform: translateX(5px); /* Gerak sedikit ke kanan */
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        .sidebar i { width: 25px; text-align: center; }

        /* Area Konten Utama */
        .content-area { padding: 30px; }

        /* Card Kustom untuk Tabel */
        .card-colorful {
            border: none;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            background: white;
            overflow: hidden; /* Agar sudut tabel ikut melengkung */
        }

        /* Header Tabel Colorful */
        .bg-gradient-primary {
             /* Gradien Biru Cerah untuk Header Tabel */
            background: linear-gradient(45deg, #007bff, #6610f2);
            color: white;
        }
    </style>
</head>
<body>
<div class="container-fluid p-0">
    <div class="row g-0"> <div class="col-md-2 sidebar">
            <div class="sidebar-brand">
                <i class="fas fa-shopping-bag me-2"></i> Toko Tas
            </div>
            
            <a href="../products/display.php"><i class="fas fa-box"></i> Produk</a>
            <a href="../brands/index.php"><i class="fas fa-tags"></i> Brand</a>
            <a href="../categories/index.php"><i class="fas fa-layer-group"></i> Kategori</a>
            <div class="my-4 border-top border-light opacity-50 mx-3"></div> <a href="../users/index.php"><i class="fas fa-users-cog"></i> Users</a>
            <a href="../logout.php" class="mt-5 text-warning fw-bold"><i class="fas fa-sign-out-alt"></i> Logout</a>
        </div>

        <div class="col-md-10 content-area">
<?php
}

function template_footer() {
?>
        </div> </div> </div> <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php
}
?>