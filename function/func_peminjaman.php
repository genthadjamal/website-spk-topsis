<?php
include 'function.php';

date_default_timezone_set('Asia/Jakarta');
$datehis = date('l, d-m-Y h:i:s A');
$year = date('Y');
$invoicedate = 'INV/' . date('dmY') . '/' . rand();


if (isset($_POST['tambahdatapinjaman'])) {
    $id_peminjam = $year . rand();
    $invoice = $invoicedate;
    $judul_buku = mysqli_real_escape_string($connect, $_POST['judul_buku']);
    $nama_peminjam = mysqli_real_escape_string($connect, $_POST['nama_peminjam']);
    $id_buku = mysqli_real_escape_string($connect, $_POST['id_buku']);
    $id_anggota = mysqli_real_escape_string($connect, $_POST['id_anggota']);
    $tanggal_pinjam = mysqli_real_escape_string($connect, $_POST['tanggal_pinjam']);
    $tanggal_kembali = mysqli_real_escape_string($connect, $_POST['tanggal_kembali']);
    $status_peminjaman = 'Belum Diambil';
    $dibuat = $datehis;
    $rand = rand(100, 1000);
    $date   = date('d-m-Y');

    foreach ($_SESSION["Keranjang"] as $id_buku1 => $jumlah1) {

        $sql_insert = mysqli_query($connect, ("INSERT INTO tbl_peminjaman (id_peminjam, invoice, judul_buku, nama_peminjam, id_buku, id_anggota, tanggal_pinjam, tanggal_kembali,jumlah,dibuat, status_peminjaman) 
    VALUES ('$id_peminjam', '$invoice', '$judul_buku', '$nama_peminjam','$id_buku', '$id_anggota', '$tanggal_pinjam', '$tanggal_kembali','$jumlah1','$dibuat', '$status_peminjaman')"));
    }



    // var_dump($_POST);

}
