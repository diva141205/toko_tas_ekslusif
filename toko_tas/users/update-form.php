<?php
require_once '../config-db.php';

$id = $_GET['id'];
$sql = "SELECT * FROM users WHERE id = $id";
$result = $conn->query($sql);
$data = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit User</title>
</head>
<body>

    <h2>Edit Data User</h2>
    
    <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">

        <label>Nama:</label><br>
        <input type="text" name="name" value="<?php echo $data['name']; ?>" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" value="<?php echo $data['email']; ?>" required><br><br>

        <label>Password:</label><br>
        <input type="text" name="password" value="<?php echo $data['password']; ?>" required><br><br>

        <button type="submit">Update</button>
        <a href="display.php">Batal</a>
    </form>

</body>
</html>