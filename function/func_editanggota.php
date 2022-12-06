<?php

// ====================================================================== //
include 'function.php';
// ====================================================================== //
date_default_timezone_set('Asia/Jakarta');
$date = date('l, d-m-Y h:i:s A');
// var_dump($_POST);


if (isset($_POST['editdataakun'])) {
    session_start();
    $id_anggota = $_POST['id_anggota'];

    $diubah = $date;
    $ditambah = $date;

    $nama = mysqli_real_escape_string($connect, $_POST['nama_anggota']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
    $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);

    $sql_edit = "UPDATE tbl_anggota SET nama_anggota = '$nama', email = '$email', username = '$username', diubah = '$diubah' WHERE id_anggota = '$id_anggota' ";
    mysqli_query($connect, $sql_edit);

    echo "<script> alert('Data berhasil diubah'); </script>";
    echo "<script> location='../home.php'; </script>";
}

if (isset($_POST['editdatapassword'])) {
    session_start();
    $id_anggota = $_POST['id_anggota'];

    $diubah = $date;
    $ditambah = $date;

    $password = md5($_POST['password']);
    $password2 = md5($_POST['password2']);

    if ($password != $password2) {
        echo "<script> alert('password tidak sama'); </script>";
        echo "<script> location='../login/edit-profil.php'; </script>";
        exit;
    } else {
        $sql_edit = "UPDATE tbl_anggota SET password = '$password' WHERE id_anggota = '$id_anggota' ";
        mysqli_query($connect, $sql_edit);

        echo "<script> alert('Data berhasil diubah'); </script>";
        echo "<script> location='../home.php'; </script>";
    }
}
