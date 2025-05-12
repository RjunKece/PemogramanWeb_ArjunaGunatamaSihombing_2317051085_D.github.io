<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">MyApp</a>
            <div class="d-flex">
                <a href="logout.php" class="btn btn-outline-light">Logout</a>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="alert alert-success rounded-4 shadow-sm" role="alert">
            <h4 class="alert-heading">Selamat Datang, <?= htmlspecialchars($_SESSION['user']); ?>!</h4>
            <p>Kamu berhasil login ke dalam sistem. Ini adalah halaman dashboard sederhana.</p>
        </div>
    </div>
</body>
</html>