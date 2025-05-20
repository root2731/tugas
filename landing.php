<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Landing Page</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h2>Selamat Datang, <?= $_SESSION['email'] ?></h2>
    <form method="POST" action="insert.php">
        <input type="text" name="nama" placeholder="Nama Mahasiswa" required><br>
        <input type="text" name="nim" placeholder="NIM" required><br>
        <button type="submit">Simpan</button>
    </form>
</body>

</html>