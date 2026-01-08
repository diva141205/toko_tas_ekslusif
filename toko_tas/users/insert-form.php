<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah User</title>
</head>
<body>

    <h2>Tambah User Baru</h2>
    
    <form action="insert.php" method="post">
        <label>Nama Lengkap:</label><br>
        <input type="text" name="name" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label>Password:</label><br>
        <input type="password" name="password" required><br><br>

        <button type="submit">Simpan</button>
        <a href="display.php">Batal</a>
    </form>

</body>
</html>