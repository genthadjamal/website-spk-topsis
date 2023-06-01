<?php
// ====================================================================== //
// include 'function.php';
include '../config/database.php';
// ====================================================================== //
date_default_timezone_set('Asia/Jakarta');
$datehis = date('l, d-m-Y h:i:s A');
$year = date('Y');

// PROSES TAMBAH DATA PADA TABLE produk
if (isset($_POST['tambahdatabalita'])) {
    $id_balita = rand();
    $nama_balita = mysqli_real_escape_string($connect, $_POST['nama_balita']);
    $alamat_balita = mysqli_real_escape_string($connect, $_POST['alamat_balita']);
    $jenis_kelamin = mysqli_real_escape_string($connect, $_POST['jk']);
    $umur = mysqli_real_escape_string($connect, $_POST['umur']);
    $tinggi = mysqli_real_escape_string($connect, $_POST['tinggi']);
    $berat = mysqli_real_escape_string($connect, $_POST['berat']);
    $dibuat = $datehis;
    $diubah = $datehis;



    $date = date('d-m-Y');
    $rand = rand(100, 1000);



    $sql_tambah = "INSERT INTO tbl_balita (id_balita, nama_balita, alamat_balita, jenis_kelamin, umur, tinggi, berat, dibuat, diubah) 
    VALUES ('$id_balita','$nama_balita', '$alamat_balita','$jenis_kelamin', '$umur','$tinggi','$berat', '$dibuat', '$diubah')";
    mysqli_query($connect, $sql_tambah);

    // echo  "INSERT INTO tbl_balita (id_balita, nama_balita, alamat_balita,jenis_kelamin, umur, tinggi, berat, dibuat, diubah) 
    // VALUES ('$id_balita','$nama_balita', '$alamat_balita','$jenis_kelamin', '$umur','$tinggi','$berat', '$dibuat', '$diubah')";

    session_start();
    $_SESSION['flash-y'] = '<strong> Berhasil..!</strong> Berhasil menambahkan data...';
    echo "<script> location='../index.php?page=balita'; </script>";


    // if (!in_array($ext, $ekstensi)) {
    //     echo "<script> alert('Ekstensi tidak sesuai !!!'); </script>";
    //     echo "<script> location='../index.php?page=buku'; </script>";
    // } else {
    //     if ($ukuran < 1044070) {
    //         $coverbuku = $rand . '_' . $date . '_' . $filename;
    //         move_uploaded_file($_FILES['coverbuku']['tmp_name'], '../foto/' . $rand . '_' . $date . '_' . $filename);


    //         $sql_tambah = "INSERT INTO tbl_buku (id_buku, judul_buku, penulis_buku, penerbit_buku, kategori_buku, bahasa, lokasi_buku, deskripsi_buku, coverbuku, stok, dibuat, diubah) 
    //                             VALUES ('$id_buku','$judul_buku', '$penulis_buku', '$penerbit_buku','$kategori_buku','$bahasa','$lokasi_buku','$deskripsi_buku', '$coverbuku', '$stok', '$dibuat', '$diubah')";
    //         mysqli_query($connect, $sql_tambah);

    //         session_start();
    //         $_SESSION['flash-y'] = '<strong> Berhasil..!</strong> Berhasil menambahkan data...';
    //         echo "<script> location='../index.php?page=buku'; </script>";
    //     } else {
    //         session_start();
    //         $_SESSION['flash-n'] = '<strong> Gagal..!</strong> Ukuran terlalu besar...';
    //         echo "<script> location='../index.php?page=buku'; </script>";
    //     }
    // }
    // header("location:../index.php?page=balita");
}


///////////////////////////////////////
// EDIT DATA balita
if (isset($_POST['editdatabalita'])) {
    $id_balita = $_POST['id_balita'];
    $nama_balita = filter_var($_POST['nama_balita'], FILTER_SANITIZE_STRING);
    $alamat_balita = filter_var($_POST['alamat_balita'], FILTER_SANITIZE_STRING);
    $jenis_kelamin = filter_var($_POST['jenis_kelamin'], FILTER_SANITIZE_STRING);
    $umur = filter_var($_POST['umur'], FILTER_SANITIZE_STRING);
    $tinggi = filter_var($_POST['tinggi'], FILTER_SANITIZE_STRING);
    $berat = filter_var($_POST['berat'], FILTER_SANITIZE_STRING);

    $diubah = $datehis;

    $sql_edit = "UPDATE tbl_balita SET nama_balita = '$nama_balita', alamat_balita = '$alamat_balita',jenis_kelamin = '$jenis_kelamin', umur='$umur', tinggi = '$tinggi',berat = '$berat', diubah = '$diubah'
                                    WHERE id_balita = '$id_balita' ";
    mysqli_query($connect, $sql_edit);

    session_start();
    $_SESSION['flash-y'] = '<strong> Berhasil..!</strong> Berhasil Mengedit Data...';
    echo "<script> location='../index.php?page=balita'; </script>";
    // echo "UPDATE tbl_balita SET nama_balita = '$nama_balita', alamat_balita = '$alamat_balita', umur='$umur', tinggi = '$tinggi',berat = '$berat', diubah = '$diubah'
    //                                 WHERE id_balita = '$id_balita' ";
}
