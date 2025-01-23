<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #f4f7fc;
        }
        .container {
            max-width: 800px;
            background-color: #fff;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #0056b3;
            font-size: 2rem;
        }
        .form-label {
            font-weight: 600;
        }
        .btn-primary, .btn-success, .btn-secondary {
            width: 100%;
            margin-top: 10px;
        }
        .form-check-label {
            font-weight: 500;
        }
    </style>
</head>
<body>
    <div class="container py-5">
        <h1 class="text-center mb-5">Form Transaksi</h1>
        <form action="success.php" method="POST">
            <div class="mb-3">
                <label for="noTransaksi" class="form-label">Nomor Transaksi</label>
                <input type="number" class="form-control" id="noTransaksi" name="noTransaksi" required>
            </div>

            <div class="mb-3">
                <label for="tanggalTransaksi" class="form-label">Tanggal Transaksi</label>
                <input type="date" class="form-control" id="tanggalTransaksi" name="tanggalTransaksi" required>
            </div>

            <div class="mb-3">
                <label for="namaCustomer" class="form-label">Nama Customer</label>
                <input type="text" class="form-control" id="namaCustomer" name="namaCustomer" required>
            </div>

            <div class="mb-3">
                <label for="paket" class="form-label">Paket</label>
                <input type="text" class="form-control" id="paket" name="paket" value="Hijab Premium" readonly>
            </div>

            <div class="mb-3">
                <label for="hargaPaket" class="form-label">Harga Paket</label>
                <input type="number" class="form-control" id="hargaPaket" name="hargaPaket" value="60000" readonly>
            </div>

            <div class="mb-3">
                <label class="form-label">Tambahan Paket</label>
                <div>
                    <div class="form-check">
                        <input type="radio" name="tambahan" id="tambahan1" value="5000" class="form-check-input">
                        <label for="tambahan1" class="form-check-label">Tas Hijab (+Rp 5,000)</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" name="tambahan" id="tambahan2" value="10000" class="form-check-input">
                        <label for="tambahan2" class="form-check-label">Kotak Eksklusif (+Rp 10,000)</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" name="tambahan" id="tambahan3" value="15000" class="form-check-input">
                        <label for="tambahan3" class="form-check-label">Kartu Ucapan (+Rp 15,000)</label>
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label for="pembayaran" class="form-label">Uang Pembayaran</label>
                <input type="number" class="form-control" id="pembayaran" name="pembayaran" required>
            </div>

            <div class="mb-3">
                <label for="totalHarga" class="form-label">Total Harga</label>
                <input type="text" class="form-control" id="totalHarga" name="totalHarga" readonly>
            </div>

            <div class="mb-3">
                <label for="kembalian" class="form-label">Kembalian</label>
                <input type="text" class="form-control" id="kembalian" name="kembalian" readonly>
            </div>

            <button type="button" class="btn btn-primary" id="hitungTotal">Hitung Total Harga</button>
            <button type="button" class="btn btn-success" id="hitungKembalian">Hitung Kembalian</button>
            <button type="submit" class="btn btn-secondary">Simpan Transaksi</button>
        </form>
    </div>

    <script>
        document.getElementById('hitungTotal').addEventListener('click', function () {
            const hargaPaket = parseInt(document.getElementById('hargaPaket').value || 0);
            const tambahan = parseInt(document.querySelector('input[name="tambahan"]:checked')?.value || 0);

            const totalHarga = hargaPaket + tambahan;
            document.getElementById('totalHarga').value = `Rp ${totalHarga.toLocaleString('id-ID')}`;
        });

        document.getElementById('hitungKembalian').addEventListener('click', function () {
            const totalHarga = parseInt(document.getElementById('hargaPaket').value || 0) +
                               parseInt(document.querySelector('input[name="tambahan"]:checked')?.value || 0);
            const pembayaran = parseInt(document.getElementById('pembayaran').value || 0);

            const kembalian = pembayaran - totalHarga;
            document.getElementById('kembalian').value = `Rp ${kembalian.toLocaleString('id-ID')}`;
        });
    </script>
</body>
</html>
