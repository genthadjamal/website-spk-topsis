<?php
// ====================================================================== //
include 'function.php';
// include '../config/database.php';
// ====================================================================== //
date_default_timezone_set('Asia/Jakarta');
$datehis = date('l, d-m-Y h:i:s A');
$year = date('Y');

// PROSES TAMBAH DATA PADA TABLE produk
if (isset($_POST['tambahdatabalita'])) {
    $id_balita = $year . rand();
    $nama_balita = mysqli_real_escape_string($connect, $_POST['nama_balita']);
    $alamat_balita = mysqli_real_escape_string($connect, $_POST['alamat_balita']);
    $umur = mysqli_real_escape_string($connect, $_POST['umur']);
    $tinggi = mysqli_real_escape_string($connect, $_POST['tinggi']);
    $berat = mysqli_real_escape_string($connect, $_POST['berat']);
    $dibuat = $datehis;
    $diubah = $datehis;



    $date = date('d-m-Y');
    $rand = rand(100, 1000);



    $sql_tambah = "INSERT INTO tbl_balita (id_balita, nama_balita, alamat_balita, umur, tinggi, berat, dibuat, diubah) 
    VALUES ('$id_balita','$nama_balita', '$alamat_balita', '$umur','$tinggi','$berat', '$dibuat', '$diubah')";
    mysqli_query($connect, $sql_tambah);

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
// EDIT DATA produk
if (isset($_POST['editdatabuku'])) {
    $id_buku = $_POST['id_buku'];
    $judul_buku = filter_var($_POST['judul_buku'], FILTER_SANITIZE_STRING);
    $penulis_buku = filter_var($_POST['penulis_buku'], FILTER_SANITIZE_STRING);
    $penerbit_buku = filter_var($_POST['penerbit_buku'], FILTER_SANITIZE_STRING);
    $kategori_buku = filter_var($_POST['kategori_buku'], FILTER_SANITIZE_STRING);
    $bahasa = filter_var($_POST['bahasa'], FILTER_SANITIZE_STRING);
    $lokasi_buku = filter_var($_POST['lokasi_buku'], FILTER_SANITIZE_STRING);
    $deskripsi_buku = $_POST['deskripsi_buku'];
    $stok = filter_var($_POST['stok'], FILTER_SANITIZE_STRING);

    $diubah = $datehis;

    $sql_edit = "UPDATE tbl_buku SET judul_buku = '$judul_buku', penulis_buku = '$penulis_buku', penerbit_buku='$penerbit_buku', kategori_buku = '$kategori_buku',bahasa = '$bahasa', lokasi_buku = '$lokasi_buku', deskripsi_buku = '$deskripsi_buku', stok = '$stok', diubah = '$diubah'
                                    WHERE id_buku = '$id_buku' ";
    mysqli_query($connect, $sql_edit);

    session_start();
    $_SESSION['flash-y'] = '<strong> Berhasil..!</strong> Berhasil Menambahkan Data...';
    echo "<script> location='../index.php?page=buku'; </script>";
}
// 
// EDIT FOTO produk
if (isset($_POST['editfoto'])) {
    $id_buku = $_POST['id_buku'];
    $diubah = $datehis;

    $rand = rand(100, 1000);
    $date   = date('d-m-Y');
    $ekstensi =  array('png', 'jpg', 'jpeg', 'gif', 'webp');
    $filename = $_FILES['coverbuku']['name'];
    $ukuran = $_FILES['coverbuku']['size'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);

    if (!in_array($ext, $ekstensi)) {
        session_start();
        $_SESSION['flash-n'] = '<strong> Gagal..!</strong> Ekstensi tidak sesuai...';

        echo "<script> location='../index.php?page=buku'; </script>";
    } else {
        if ($ukuran < 19044070) { //ukuran 19MB = 19044070 // UK 1MB = 1044070
            $coverbuku = $rand . '_' . $date . '_' . $filename;

            $query = "SELECT * FROM tbl_buku WHERE id_buku = '$id_buku' ";
            $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query

            $data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql

            if (is_file("../foto/" . $data['coverbuku'])) // Jika gambar ada
                unlink("../foto/" . $data['coverbuku']); // Hapus file gambar sebelumnya yang ada di folder images

            move_uploaded_file($_FILES['coverbuku']['tmp_name'], '../foto/' . $rand . '_' . $date . '_' . $filename);

            $sql_edit = "UPDATE tbl_buku SET coverbuku = '$coverbuku', diubah = '$diubah' WHERE id_buku = '$id_buku' ";
            mysqli_query($connect, $sql_edit);

            session_start();
            $_SESSION['flash-y'] = '<strong> Berhasil..!</strong> Berhasil Mengubah Foto...';

            echo "<script> location='../index.php?page=buku'; </script>";
        } else {
            session_start();
            $_SESSION['flash-n'] = '<strong> Gagal..!</strong> Ukuran terlalu besar...';
            echo "<script> location='../index.php?page=buku'; </script>";
        }
    }
    // header("Location:produk.php");
}
