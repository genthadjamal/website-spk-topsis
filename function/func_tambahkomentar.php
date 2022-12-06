<?php

include 'function.php';


date_default_timezone_set('Asia/Jakarta');
$datehis = date('l, d-m-Y h:i:s A');
$year = date('Y');

// PROSES TAMBAH KOMENTAR
if (isset($_POST['tambahdatakomentar'])) {
    $id_buku = mysqli_real_escape_string($connect, $_POST['id_buku']);
    $nama = mysqli_real_escape_string($connect, $_POST['nama']);
    $komentar = mysqli_real_escape_string($connect, $_POST['komentar']);

    $dibuat = $datehis;
    $diubah = $datehis;



    $date = date('d-m-Y');
    $rand = rand(100, 1000);

    $sql_tambahkomen = "INSERT INTO tbl_komentar (id_buku, nama, komentar, dibuat, diubah) 
    VALUES ('$id_buku','$nama', '$komentar', '$dibuat', '$diubah')";
    mysqli_query($connect, $sql_tambahkomen);
    header("location: ../login/page_buku.php");
}
