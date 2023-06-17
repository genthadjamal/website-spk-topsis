<?php
// ====================================================================== //
include 'function.php';
// ====================================================================== //
date_default_timezone_set('Asia/Jakarta');
$date = date('l, d-m-Y h:i:s A');
// var_dump($_POST);


// register
if (isset($_POST['regis'])) {
    session_start();

    $id_admin = 'ID' . rand();
    $nama = mysqli_real_escape_string($connect, $_POST['nama']);
    $email = mysqli_real_escape_string($connect, $_POST['email']);
    $username = mysqli_real_escape_string($connect, $_POST['username']);
    $password = md5($_POST['password']);
    $password2 = md5($_POST['password2']);

    $dibuat = $date;
    $diubah = $date;

    $sql = mysqli_query($connect, "SELECT * FROM tbl_admin where email='$email'");
    $sqlnama = mysqli_query($connect, "SELECT * FROM tbl_admin where nama='$nama'");
    $sqlun = mysqli_query($connect, "SELECT * FROM tbl_admin where username='$username'");

    if (mysqli_num_rows($sql) > 0) {
        $_SESSION['flash-n'] = '<strong> Gagal..!</strong> Email sudah digunakan...';
        echo '<script>
                window.location.href="../admin/Auth/page_register.php";
            </script>';
        exit;
    } elseif (mysqli_num_rows($sqlnama) > 0) {
        $_SESSION['flash-n'] = '<strong> Gagal..!</strong> Nama sudah digunakan...';
        echo '<script>
                window.location.href="../admin/Auth/page_register.php";
            </script>';
        exit;
    } elseif (mysqli_num_rows($sqlun) > 0) {
        $_SESSION['flash-n'] = '<strong> Gagal..!</strong> Username sudah digunakan';
        header("Location: ../admin/Auth/page_register.php");
        exit;
    } elseif ($password != $password2) {
        $_SESSION['flash-n'] = '<strong> Gagal..!</strong> Password tidak sama';
        header("Location: ../admin/Auth/page_register.php");
        exit;
    } else {
        $sql_insert = "INSERT INTO tbl_admin VALUES('$id_admin', '$nama','$email','$username', '$password', '$dibuat', '$diubah')";
        mysqli_query($connect, $sql_insert);
        $_SESSION['flash-y'] = '<strong> Sukses..!</strong> Daftar Berhasil';
        header("Location:../Auth/page_login.php");
        // var_dump($_POST);
        // echo "INSERT INTO tbl_admin VALUES('$id_admin', '$nama','$email','$username', '$password', '$dibuat', '$diubah')";
    }
}
// ========================= PAGE ADMINISTRATOR =================================== //
// Buat AKUN
if (isset($_POST['tambahakun'])) {
    session_start();

    $id_admin = 'ID' . rand();
    $nama = mysqli_real_escape_string($connect, $_POST['nama']);
    $email = mysqli_real_escape_string($connect, $_POST['email']);
    $username = mysqli_real_escape_string($connect, $_POST['username']);
    $password = md5($_POST['password']);
    $password2 = md5($_POST['password2']);

    $dibuat = $date;
    $diubah = $date;

    $sql = mysqli_query($connect, "SELECT * FROM tbl_admin where email='$email'");
    $sqlnama = mysqli_query($connect, "SELECT * FROM tbl_admin where nama='$nama'");
    $sqlun = mysqli_query($connect, "SELECT * FROM tbl_admin where username='$username'");

    if (mysqli_num_rows($sql) > 0) {
        $_SESSION['flash-n'] = '<strong> Gagal..!</strong> Email sudah digunakan...';
        echo '<script>
                window.location.href="../index.php?page=administrator";
            </script>';
        exit;
    } elseif (mysqli_num_rows($sqlnama) > 0) {
        $_SESSION['flash-n'] = '<strong> Gagal..!</strong> Nama sudah digunakan...';
        echo '<script>
                window.location.href="../index.php?page=administrator";
            </script>';
        exit;
    } elseif (mysqli_num_rows($sqlun) > 0) {
        $_SESSION['flash-n'] = '<strong> Gagal..!</strong> Username sudah digunakan';
        header("Location:../index.php?page=administrator");
        exit;
    } elseif ($password != $password2) {
        $_SESSION['flash-n'] = '<strong> Gagal..!</strong> Password tidak sama';
        header("Location:../index.php?page=administrator");
        exit;
    } else {
        $sql_insert = "INSERT INTO tbl_admin VALUES('$id_admin', '$nama','$email','$username', '$password', '$dibuat', '$diubah')";
        mysqli_query($connect, $sql_insert);
        $_SESSION['flash-y'] = '<strong> Sukses..!</strong> Data Berhasil ditambahkan';
        // header("Location:../index.php?page=administrator");
        // var_dump($_POST);
        echo "INSERT INTO tbl_admin VALUES('$id_admin', '$nama','$email','$username', '$password', '$dibuat', '$diubah')";
    }
}

// var_dump($_POST);

// EDIT DATA akun
if (isset($_POST['editdataakun'])) {
    session_start();
    $id_admin = $_POST['id_admin'];

    $diubah = $date;
    $ditambah = $date;

    $nama = mysqli_real_escape_string($connect, $_POST['nama_admin']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
    $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);

    $sql_edit = "UPDATE tbl_admin SET nama_admin = '$nama', email = '$email', username = '$username', diubah = '$diubah' WHERE id_admin = '$id_admin' ";
    mysqli_query($connect, $sql_edit);

    $_SESSION['flash-y'] = '<strong> Sukses..!</strong> Data Berhasil diubah.';
    header("Location:../index.php?page=administrator");
}

if (isset($_POST['editdatapassword'])) {
    session_start();
    $id_admin = $_POST['id_admin'];

    $diubah = $date;
    $ditambah = $date;

    $password = md5($_POST['password']);
    $password2 = md5($_POST['password2']);

    if ($password != $password2) {
        $_SESSION['flash-n'] = '<strong> Gagal..!</strong> Password tidak sama';
        header("Location:../index.php?page=administrator");
        exit;
    } else {
        $sql_edit = "UPDATE tbl_admin SET password = '$password' WHERE id_admin = '$id_admin' ";
        mysqli_query($connect, $sql_edit);

        $_SESSION['flash-y'] = '<strong> Sukses..!</strong> Password Berhasil diubah.';
        header("Location:../index.php?page=administrator");
    }
}
