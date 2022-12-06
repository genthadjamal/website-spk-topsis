<?php
define('DB_SERVER', 'localhost');             // HOST SERVER
define('DB_USERID', 'root');                  // USER ID
define('DB_PASSWORD', '');                // PASSWORD
define('DB_NAME', 'db_perpustakaan');     // NAMA DATABASE

$connect = mysqli_connect(DB_SERVER, DB_USERID, DB_PASSWORD, DB_NAME) or die("Database tidak terkoneksi");

function login()
{
    session_start();
    if (empty($_SESSION['username'])) {
        header('location:login.php');
    }
}

function getRating($id_buku, $con)
{
    //Get Data Rating
    $data = $con->query("SELECT AVG(rating) as rating FROM tbl_rating WHERE id_buku = $id_buku");
    $data = $data->fetch_assoc();

    return round($data['rating'], 1);
}

function getFavoriteBook($con)
{
    $result = [];

    $data = $con->query("SELECT * FROM tbl_buku");

    while ($row = $data->fetch_assoc()) {
        $result[] = [
            'judul_buku' => $row['judul_buku'],
            'coverbuku' => $row['coverbuku'],
            'rating' => getRating($row['id_buku'], $con)
        ];
    }

    usort($result, function ($item1, $item2) {
        return $item2['rating'] <=> $item1['rating'];
    });

    return $result;
}

function getHistoryBook($tipe, $con)
{
    //Set Variable
    $hari = date('d');
    $bulan = date('m');
    $tahun = date('Y');

    if ($tipe == "HARI") {
        $data = $con->query("SELECT count(*) as total FROM tbl_peminjaman WHERE DAY(tanggal_pinjam) = '$hari' AND MONTH(tanggal_pinjam) = '$bulan'  AND YEAR(tanggal_pinjam) = '$tahun' ");
    }
    if ($tipe == "BULAN") {
        $data = $con->query("SELECT count(*) as total FROM tbl_peminjaman WHERE MONTH(tanggal_pinjam) = '$bulan'  AND YEAR(tanggal_pinjam) = '$tahun' ");
    }
    if ($tipe == "TAHUN") {
        $data = $con->query("SELECT count(*) as total FROM tbl_peminjaman WHERE YEAR(tanggal_pinjam) = '$tahun' ");
    }

    $data = $data->fetch_assoc();

    return $data['total'];
}
