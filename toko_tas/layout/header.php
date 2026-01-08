<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Tas Eksklusif</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        .navbar { border-bottom: 1px solid #eee; }
        .nav-link { font-weight: 500; color: #555; }
        .nav-link:hover { color: #0d6efd; }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top py-3">
    <div class="container">
        <a class="navbar-brand fw-bold fs-4" href="/toko_tas/front-page.php">
            <span class="text-primary">LUX</span>BAGS
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/toko_tas/front-page.php">Katalog</a>
                </li>
                <?php if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin'): ?>
                    <li class="nav-item">
                        <a class="nav-link text-primary" href="/toko_tas/products/display.php">Panel Admin</a>
                    </li>
                <?php endif; ?>
            </ul>
            
            <div class="d-flex align-items-center">
                <?php if (isset($_SESSION['status']) && $_SESSION['status'] == 'login'): ?>
                    <span class="me-3 small text-muted">Halo, <strong><?= $_SESSION['username']; ?></strong></span>
                    <a href="/toko_tas/security/logout.php" class="btn btn-outline-danger btn-sm rounded-pill px-3">Logout</a>
                <?php else: ?>
                    <a href="/toko_tas/security/login_choice.php" class="btn btn-primary btn-sm rounded-pill px-4">Login</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</nav>