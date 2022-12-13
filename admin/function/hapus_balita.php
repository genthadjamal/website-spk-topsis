<?php
include('function.php');

if (isset($_GET['id_balita'])) {
    $id_balita = $_GET['id_balita'];

    $sql_delete = "DELETE FROM tbl_balita WHERE id_balita = '$id_balita' ";
    $cek = mysqli_query($connect, $sql_delete);

    if ($cek > 0) {
        session_start();
        $_SESSION['flash-y'] = '<strong> Berhasil..!</strong> Data berhasil dihapus';
    } else {
        session_start();
        $_SESSION['flash-n'] = '<strong> Gagal..!</strong> Data Gagal dihapus';
    }
    header("Location:../index.php?page=balita");
}
