<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afi Hijab Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background: linear-gradient(135deg, #fff4f7 0%, #ffe3f1 100%);
            font-family: 'Poppins', sans-serif;
            min-height: 100vh;
        }
        .hero {
            position: relative;
            background: url('https://via.placeholder.com/1200x500?text=Afi+Hijab+Store') center/cover no-repeat;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
        }
        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
        }
        .hero-content {
            position: relative;
            text-align: center;
            z-index: 1;
        }
        .hero h1 {
            font-size: 3.5rem;
            text-transform: uppercase;
            font-weight: bold;
            letter-spacing: 2px;
            margin-bottom: 20px;
        }
        .hero h1 span {
            display: inline-block;
            color: #ffd1dc;
        }
        .hero p {
            font-size: 1.5rem;
            margin-bottom: 30px;
            color: #ffecec;
        }
        .hero .btn {
            font-size: 1.2rem;
            padding: 10px 30px;
            background-color: #ff6f91;
            border: none;
        }
        .hero .btn:hover {
            background-color: #ff3e70;
        }
        .products-section {
            padding: 50px 0;
            background-color: #fff4f7;
        }
        .products-section h2 {
            text-align: center;
            margin-bottom: 40px;
            font-weight: bold;
            color: #ff6f91;
        }
        .card {
            border: none;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease-in-out;
        }
        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
        }
        .card img {
            height: 250px;
            object-fit: cover;
            border-radius: 10px;
        }
        .card-body {
            text-align: center;
        }
        .card-title {
            font-size: 1.1rem;
            font-weight: bold;
            color: #333;
        }
        .card-text {
            color: #777;
            margin-bottom: 10px;
        }
        .price {
            font-size: 1.2rem;
            font-weight: bold;
            color: #ff6f91;
        }
        footer {
            background-color: #fff;
            padding: 30px 0;
            margin-top: 50px;
            text-align: center;
            box-shadow: 0 -2px 15px rgba(0, 0, 0, 0.1);
        }
        footer p {
            margin: 0;
            font-size: 1rem;
            color: #555;
        }
        footer a {
            text-decoration: none;
            color: #ff6f91;
        }
        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1>Selamat Datang di <span>Afi Hijab Store</span></h1>
            <p>Koleksi hijab cantik dan berkualitas untuk setiap gaya Anda!</p>
            <a href="#products" class="btn btn-light">Lihat Koleksi</a>
        </div>
    </section>

    <!-- Products Section -->
    <section class="products-section" id="products">
        <div class="container">
            <h2>Koleksi Hijab Kami</h2>
            <div class="row">
                <?php
                // Data produk hijab
                $datapaket = array(
                    array("AfiHijab motif bahan voal Trystan ukuran 110 x 110 cm.", "Hijab untuk kegiatan sehari-hari", 150000, "img/kerudung1.jpeg"),
                    array("AfiHijab motif bahan voal Trinity ukuran 110 x 110 cm.", "Hijab dengan bahan premium dan elegan", 125000, "img/kerudung1.jpeg"),
                    array("AfiHijab motif bahan voal ukuran 120 x 120 cm.", "Hijab syar'i dengan desain stylish", 60000, "img/kerudung1.jpeg"),
                    array("AfiHijab motif bahan voal ukuran 120 x 120 cm.", "Hijab polos simpel untuk gaya minimalis", 45000, "img/kerudung1.jpeg"),
                    array("AfiHijab polos bahan voal hijab syar'i ukuran 130 x 130 cm.", "Hijab eksklusif untuk acara pernikahan", 85000, "img/kerudung1.jpeg"),
                    array("AfiHijab polos bahan katun Jepang ukuran 115 x 115 cm.", "Hijab instan dengan gaya modern", 90000, "img/kerudung1.jpeg"),
                    array("AfiHijab polos bahan pollykatun ukuran 110 x 110 cm.", "Hijab instan dengan gaya modern", 35000, "img/kerudung1.jpeg"),
                );

                // Looping produk hijab
                foreach ($datapaket as $paket) {
                    echo '
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="card">
                            <img src="' . $paket[3] . '" class="card-img-top" alt="' . $paket[0] . '">
                            <div class="card-body">
                                <h5 class="card-title">' . $paket[0] . '</h5>
                                <p class="card-text">' . $paket[1] . '</p>
                                <p class="price">Rp ' . number_format($paket[2], 0, ',', '.') . '</p>
                                <form action="transaction.php" method="POST">
                                    <input type="hidden" name="paket" value="' . $paket[0] . '">
                                    <input type="hidden" name="harga" value="' . $paket[2] . '">
                                    <button type="submit" class="btn btn-primary">Beli Sekarang</button>
                                </form>
                            </div>
                        </div>
                    </div>';
                }
                ?>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer>
        <div class="container">
            <p><strong>Alamat:</strong>Kalimantan Selatan Banjarmasin, Indonesia</p>
            <p><strong>Email:</strong> <a href="mailto:afihijabstore@gmail.com">afihijabstore@gmail.com</a></p>
            <p><strong>Telepon:</strong> +62 812-3456-7890</p>
            <hr>
            <p>&copy; 2025 Afi Hijab Store. Semua Hak Dilindungi.</p>
            <small>Didesain dengan <span style="color: #ff6f91;">&#9829;</span> oleh Afi Hijab Store Team</small>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
