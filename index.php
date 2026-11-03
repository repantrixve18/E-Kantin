<?php
include 'koneksi.php';
$query = mysqli_query($conn, "SELECT * FROM menu");
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kantin Modern - SMKN 1 Subang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <nav class="navbar navbar-dark bg-success shadow-sm">
        <div class="container">
            <span class="navbar-brand mb-0 h1">🍔 Smart Canteen SMKN 1 Subang</span>
        </div>
    </nav>
    <div class="container mt-4">
        <h3 class="mb-4">Daftar Menu Kantin</h3>
        <div class="row">
            <?php while ($row = mysqli_fetch_assoc($query)) { ?>
            <div class="col-md-4 mb-3">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h5 class="card-title"><?= $row['nama_menu']; ?></h5>
                        <h6 class="text-success fw-bold">Rp <?= number_format($row['harga'], 0, ',', '.'); ?></h6>
                        <span class="badge bg-secondary mb-3"><?= $row['kategori']; ?></span>
                        <a href="pesan.php?id=<?= $row['id_menu']; ?>" class="btn btn-
primary w-100">Pesan Sekarang</a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</body>
</html
