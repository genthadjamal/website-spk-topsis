<?php
// ====================================================================== //
include 'function.php'; // Include the function file
// ====================================================================== //
// var_dump($_POST);

// PROSES LOGIN
if (isset($_POST['login'])) { // Jika tombol login ditekan
    session_start(); // Memulai session
    $secret = "6LcNty0gAAAAALTsF1HuVC12iFesc_xf0V2xLoGs"; // secret key google recaptcha
    $url = "https://www.google.com/recaptcha/api/siteverify"; // Google reCAPTCHA API

    $verify = file_get_contents($url . '?secret=' . $secret . '&response=' . $_POST['g-recaptcha-response']); // Get the response data.
    $responseData = json_decode($verify); // decode json

    if ($responseData->success == true) {
        // With Filter  
        $username = mysqli_real_escape_string($connect, $_POST['username']);
        $password = mysqli_real_escape_string($connect, md5($_POST['password']));

        // menyeleksi data user dengan username dan password yang sesuai
        $login = mysqli_query($connect, "SELECT * FROM tbl_anggota WHERE ( username = '$username' OR email = '$username' ) AND password='$password'");
        $cek = mysqli_num_rows($login); // menghitung jumlah data yang ditemukan
        $login1 = mysqli_query($connect, "SELECT * FROM tbl_anggota WHERE username = '$username' OR email = '$username'");
        $cek1 = mysqli_num_rows($login1); // menghitung jumlah data yang ditemukan
        $login2 = mysqli_query($connect, "SELECT * FROM tbl_anggota WHERE password = '$password'");
        $cek2 = mysqli_num_rows($login2); // menghitung jumlah data yang ditemukan

        if ($cek > 0) { // cek apakah username dan password di temukan pada database
            // $cek = mysqli_fetch_assoc($login);
            // mengaktifkan session pada php

            $qry = mysqli_fetch_array($login); // mengambil data dari database yang sesuai dengan username dan password yang diinputkan
            // $_SESSION['username'] = $username;
            $_SESSION['id_anggota'] = $qry['id_anggota']; // menyimpan data id_admin pada session yang bernama id_admin
            $_SESSION['username'] = $qry['username']; // menyimpan data username pada session yang bernama username
            // $_SESSION['hak_akses']= $qry['hak_akses'];
            $_SESSION['nama_angoota']  = $qry['nama_anggota']; // menyimpan data nama pada session yang bernama nama
            $_SESSION['email'] = $qry['email']; // menyimpan data email pada session yang bernama email
            $namaa = $qry['nama_anggota'];

            $_SESSION['sukses'] = "Berhasil login <br> User : " . $namaa; // menyimpan data pada session yang bernama sukses

            header("location:home.php"); // mengalihkan ke halaman utama
        } else if ($cek1 == 0) {
            // session_start();
            $_SESSION['flash-n'] = 'email atau username tidak ditemukan';
            // echo "<script> alert('Email atau password anda salah !!!'); </script>";
            // header("location: page-login.php"); // mengalihkan ke halaman login
            // echo "<script> location='../Auth/page-login.php'; </script>";
        } else if ($cek2 == 0) {
            // session_start();
            $_SESSION['flash-n'] = 'password anda salah';
            // echo "<script> alert('Email atau password anda salah !!!'); </script>";
            // header("location: page-login.php"); // mengalihkan ke halaman login
            // echo "<script> location='../Auth/page-login.php'; </script>";
        } else {
            // session_start();
            $_SESSION['flash-n'] = 'username, email & password anda salah';
            // echo "<script> alert('Email atau password anda salah !!!'); </script>";
            // header("location: page-login.php"); // mengalihkan ke halaman login
            // echo "<script> location='../Auth/page-login.php'; </script>";
        }
    } else {
        // session_start();
        $_SESSION['flash-l'] = 'captcha wajib diisi';
        // echo "<script> alert('Captcha salah atau belum diisi !!!'); </script>";
        // header("location: page-login.php"); // mengalihkan ke halaman login
        // echo "<script> location='../Auth/page-login.php'; </script>";

    }
    // $_SESSION['flash-l'] = 'login terlebih dahulu';
}
