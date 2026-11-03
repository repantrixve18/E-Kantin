<?php
include 'koneksi.php';
$id = $_GET['id'];
$menu = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM menu WHERE id_menu = 
$id"));
 if (isset($_POST['submit'])) {
    $nama = $_POST['nama_pemesan'];
    $kelas = $_POST['kelas'];
    $total = $menu['harga'];

    $sql = "INSERT INTO transaksi (nama_pemesan, kelas, total_harga) VALUES ('$nama', '$kelas', '$total')";
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Pesanan berhasil dibuat!'); window.location='index.php';</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan - Smart Canteen</title>
    <link
  href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white">Konfirmasi Pesanan</div>
                    <div class="card-body">
                     <h5>Menu: <?= $menu['nama_menu']; ?></h5>
                        <p class="text-success fw-bold">Harga: Rp <?= number_format($menu['harga'], 0, ',', '.'); ?></p>
                        <form method="POST">
                            <div class="mb-3">
                                <label class="form-label">Nama Pemesan</label>
                                <input type="text" name="nama_pemesan" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Kelas</label>
                                <input type="text" name="kelas" class="form-control" placeholder="Contoh: XI RPL 1" required>
                            </div>
                            <button type="submit" name="submit" class="btn btn-success w-100">Kirim Pesanan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>


</body>
</html>

   
