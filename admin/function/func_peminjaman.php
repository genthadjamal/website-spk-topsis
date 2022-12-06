<?php
// ====================================================================== //
include 'function.php';
// include '../config/database.php';
// ====================================================================== //
date_default_timezone_set('Asia/Jakarta');
$datehis = date('l, d-m-Y h:i:s A');
$year = date('Y');

// EDIT DATA peminjaman
if (isset($_POST['editdatapeminjaman'])) {
    $id_peminjam = $_POST['id_peminjam'];
    $status_peminjaman = filter_var($_POST['status_peminjaman'], FILTER_SANITIZE_STRING);
    $status_buku = filter_var($_POST['status_buku'], FILTER_SANITIZE_STRING);
    $diubah = $datehis;

    $sql_edit = "UPDATE tbl_peminjaman SET status_peminjaman = '$status_peminjaman', status_buku = '$status_buku', diubah = '$diubah'
                                    WHERE id_peminjam = '$id_peminjam' ";
    mysqli_query($connect, $sql_edit);

    // session_start();
    // // $_SESSION['flash-y'] = '<strong> Berhasil..!</strong> Pesanan Berhasil Dikonfirmasi...';
    // $_SESSION['flash-y'] = 'Pesanan Berhasil Dikonfirmasi';
    // var_dump($_POST);
    echo "<script> location='../index.php?page=pinjaman'; </script>";
    // echo "UPDATE tbl_peminjaman SET status_peminjaman = '$status_peminjaman', status_buku = '$status_buku', diubah = '$diubah'
    // WHERE id_peminjam = '$id_peminjam' ";
}
