<?php
session_start();

// Cek apakah pengguna sudah login
if (!isset($_SESSION["username"])) {
    // Jika belum login, redirect ke halaman login
    header("Location: login.php");
    exit();
}

// Jika sudah login, tampilkan dashboard
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Selamat Datang, <?php echo htmlspecialchars($_SESSION["username"]); ?>!</h1>
    <p>Anda berhasil login.</p>

    <!-- Tambahkan menu navigasi atau fitur lainnya di sini -->
    <a href="logout.php">Logout</a>
</body>
</html>
