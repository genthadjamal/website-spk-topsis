<?php
include('function.php');

if (isset($_GET['id_buku'])) {
    $id_buku = $_GET['id_buku'];

    $sql_delete = "DELETE FROM tbl_buku WHERE id_buku = '$id_buku' ";

    $sql = mysqli_query($connect, "SELECT * FROM tbl_buku WHERE id_buku = '$id_buku' ");
    $data = mysqli_fetch_array($sql);
    unlink("../foto/" . $data['cover_buku']);

    $cek = mysqli_query($connect, $sql_delete);

    if ($cek > 0) {
        session_start();
        $_SESSION['flash-y'] = '<strong> Berhasil..!</strong> Data berhasil dihapus';
    } else {
        session_start();
        $_SESSION['flash-n'] = '<strong> Gagal..!</strong> Data Gagal dihapus';
    }

    header("Location:../index.php?page=buku");
}
