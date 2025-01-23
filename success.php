<?php
// Ambil data yang dikirimkan dari formulir
$noTransaksi = $_POST['noTransaksi'] ?? '';
$tanggalTransaksi = $_POST['tanggalTransaksi'] ?? '';
$namaCustomer = $_POST['namaCustomer'] ?? '';
$paket = $_POST['paket'] ?? '';
$hargaPaket = $_POST['hargaPaket'] ?? '';
$tambahan = $_POST['tambahan'] ?? 0;
$totalHarga = $hargaPaket + $tambahan;
$pembayaran = $_POST['pembayaran'] ?? 0;
$kembalian = $pembayaran - $totalHarga;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction Success</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container py-5">
        <h1 class="text-center mb-5">Transaksi Berhasil!</h1>
        <h4>Nomor Transaksi: <?php echo htmlspecialchars($noTransaksi); ?></h4>
        <p><strong>Tanggal Transaksi:</strong> <?php echo htmlspecialchars($tanggalTransaksi); ?></p>
        <p><strong>Nama Customer:</strong> <?php echo htmlspecialchars($namaCustomer); ?></p>
        <p><strong>Paket:</strong> <?php echo htmlspecialchars($paket); ?></p>
        <p><strong>Harga Paket:</strong> Rp <?php echo number_format($hargaPaket, 0, ',', '.'); ?></p>
        <p><strong>Tambahan:</strong> Rp <?php echo number_format($tambahan, 0, ',', '.'); ?></p>
        <p><strong>Total Harga:</strong> Rp <?php echo number_format($totalHarga, 0, ',', '.'); ?></p>
        <p><strong>Pembayaran:</strong> Rp <?php echo number_format($pembayaran, 0, ',', '.'); ?></p>
        <p><strong>Kembalian:</strong> Rp <?php echo number_format($kembalian, 0, ',', '.'); ?></p>

        <a href="transaction.php" class="btn btn-primary">Kembali ke Transaksi</a>
    </div>
</body>
</html>
