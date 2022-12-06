<?php
// ====================================================================== //
include 'function.php';
// ====================================================================== //
date_default_timezone_set('Asia/Jakarta');
$date = date('l, d-m-Y h:i:s A');
// var_dump($_POST);

// ========================= PAGE ADMINISTRATOR =================================== //
// // Buat AKUN
if (isset($_POST['register'])) {
    session_start();

    $id_anggota = mysqli_real_escape_string($connect, $_POST['id_anggota']);
    $username = mysqli_real_escape_string($connect, $_POST['username']);
    $email = mysqli_real_escape_string($connect, $_POST['email']);
    $nama_anggota = mysqli_real_escape_string($connect, $_POST['nama_anggota']);
    $alamat = mysqli_real_escape_string($connect, $_POST['alamat']);
    $no_telp = mysqli_real_escape_string($connect, $_POST['no_telp']);
    $password = md5($_POST['password']);
    $password2 = md5($_POST['password2']);

    $dibuat = $date;
    $diubah = $date;

    $sql = mysqli_query($connect, "SELECT * FROM tbl_anggota where email='$email'");
    $sqlnama = mysqli_query($connect, "SELECT * FROM tbl_anggota where nama_anggota='$nama_anggota'");
    $sqlun = mysqli_query($connect, "SELECT * FROM tbl_anggota where username='$username'");

    if (mysqli_num_rows($sql) > 0) {
        $_SESSION['flash-n'] = '<strong> Gagal..!</strong> Email sudah digunakan...';
        echo '<script>
                window.location.href="../register.php";
            </script>';
        exit;
    } elseif (mysqli_num_rows($sqlun) > 0) {
        $_SESSION['flash-n'] = '<strong> Gagal..!</strong> Username sudah digunakan';
        header("Location:../register.php");
        exit;
    } elseif ($password != $password2) {
        $_SESSION['flash-n'] = '<strong> Gagal..!</strong> Password tidak sama';
        header("Location:../register.php");
        exit;
    } else {
        $sql_insert = "INSERT INTO tbl_anggota VALUES('$id_anggota', '$nama_anggota','$email','$username','$alamat','$no_telp', '$password', '$dibuat', '$diubah')";
        mysqli_query($connect, $sql_insert);
        $_SESSION['flash-y'] = '<strong> Sukses..!</strong> Data Berhasil ditambahkan';
        header("Location:../login.php");
        // var_dump($_POST);
        // echo "INSERT INTO tbl_admin VALUES('$id_admin', '$nama','$email','$username', '$password', '$dibuat', '$diubah')";
    }
}
