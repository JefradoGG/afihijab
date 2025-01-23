<?php
    // Data Username dan password yang adakan di bandingkan dengan yang disimpulkan
    $defaultusername = "afihijab";
    $defaultpassword = "hijab123";

    // proses login ketika button login di tekan
    if(isset($_POST['login'])){
        // Ambil nilai pada input username dan simpan ke dalam variabel $username
        $username = $_POST['username'];
        
        // Ambil nilai pada input password dan simpan ke dalam variabel $password
        $password = $_POST['password'];

        // Lakukan pengecekan masing-masing nilai pada input dengan nilai pada variabel defaultusername dan defaultpassword
        if($username === $defaultusername && $password === $defaultpassword){
            // Jika kondisi username dan password sama dengan nilai default, arahkan ke halaman beranda.php
            echo "<meta http-equiv='refresh' content='1;url=beranda.php'>";
        }else{
            // Jika kondisi usernam dan password berbeda dengan nilai default, kembalikan halaman login yaitu index.php
            echo "<script>alert('username atau password salah')</script>";
            echo "<meta http-equiv='refresh' content='1;url=index.php'>";
        }
    }