<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login - Afi Hijab</title>
        <!-- Link CSS Bootstrap 5 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <style>
            body {
                background: linear-gradient(135deg, #ff9a9e 0%, #fecfef 100%);
                min-height: 100vh;
                display: flex;
                align-items: center;
                justify-content: center;
            }
            .form-container {
                background: #fff;
                border-radius: 10px;
                padding: 30px;
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            }
            h1 span {
                color: #ff6f91;
                font-weight: bold;
            }
            .btn-primary {
                background-color: #ff6f91;
                border-color: #ff6f91;
                transition: background-color 0.3s ease;
            }
            .btn-primary:hover {
                background-color: #ff3e70;
                border-color: #ff3e70;
            }
            a {
                color: #ff6f91;
                text-decoration: none;
            }
            a:hover {
                text-decoration: underline;
                color: #ff3e70;
            }
        </style>
    </head>
    <body>
        <!-- Login -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 col-lg-5">
                    <div class="form-container">
                        <form action="login-proses.php" method="POST">
                            <!-- Judul -->
                            <div class="mb-4 text-center">
                                <h1>SELAMAT DATANG DI <span>AFI HIJAB</span></h1>
                                <p class="text-muted">Barang pejabat harga merakyat</p>
                            </div>
                            <!-- Username -->
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" id="username" name="username" class="form-control" required placeholder="Masukkan username">
                            </div>
                            <!-- Password -->
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" id="password" name="password" class="form-control" required placeholder="Masukkan password">
                            </div>
                            <!-- Button -->
                            <div class="d-grid">
                                <button type="submit" name="login" class="btn btn-primary">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Script JS Bootstrap 5 -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>
