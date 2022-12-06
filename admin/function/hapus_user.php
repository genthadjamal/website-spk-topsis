<?php
include('function.php');

if (isset($_GET['id_admin'])) {
    $id_admin = $_GET['id_admin'];

    $sql_delete = "DELETE FROM tbl_admin WHERE id_admin = '$id_admin' ";
    $cek = mysqli_query($connect, $sql_delete);

    if ($cek > 0) {
        session_start();
        $_SESSION['flash-y'] = '<strong> Berhasil..!</strong> Data berhasil dihapus';
    } else {
        session_start();
        $_SESSION['flash-n'] = '<strong> Gagal..!</strong> Data Gagal dihapus';
    }
    header("Location:../index.php?page=administrator");
}
