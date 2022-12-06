<?php
include('function.php');

if (isset($_GET['id_peminjam'])) {
    $id_peminjam = $_GET['id_peminjam'];

    $sql_delete = "DELETE FROM tbl_peminjaman WHERE id_peminjam = '$id_peminjam' ";
    $cek = mysqli_query($connect, $sql_delete);

    if ($cek > 0) {
        session_start();
        $_SESSION['flash-y'] = '<strong> Berhasil..!</strong> Data berhasil dihapus';
    } else {
        session_start();
        $_SESSION['flash-n'] = '<strong> Gagal..!</strong> Data Gagal dihapus';
    }
    echo "<script> location='../index.php?page=pinjaman'; </script>";
}
