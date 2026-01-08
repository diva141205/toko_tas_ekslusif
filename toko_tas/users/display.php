<?php
require_once '../config-db.php';

$sql = "SELECT * FROM users";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar User</title>
    <style>
        body { font-family: sans-serif; padding: 20px; }
        table { border-collapse: collapse; width: 100%; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 10px; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>

    <h2>Data User / Admin</h2>
    
    <a href="insert-form.php">+ Tambah User Baru</a>
    <a href="../index.php" style="margin-left: 20px;">Ke Menu Utama</a>
    
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Password</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                $no = 1;
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $no++ . "</td>";
                    echo "<td>" . $row['name'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td>" . $row['password'] . "</td>"; 
                    echo "<td>
                            <a href='update-form.php?id=".$row['id']."'>Edit</a> | 
                            <a href='delete.php?id=".$row['id']."' onclick='return confirm(\"Yakin hapus?\")'>Hapus</a>
                          </td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5' style='text-align:center'>Data Kosong</td></tr>";
            }
            ?>
        </tbody>
    </table>

</body>
</html>