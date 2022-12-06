<?php
//Deklarasi PAGE + filter
$page = filter_var($_GET['page'], FILTER_SANITIZE_URL);

if ($page == "dashboard") {
    include "Views/page_dashboard.php";
} elseif ($page == "balita") {
    include "Views/page_balita.php";
} elseif ($page == "tambahbalita") {
    include "Views/balita/page_tambahbalita.php";
} elseif ($page == "detailbuku") {
    include "Views/buku/page_detailbuku.php";
} elseif ($page == "editbuku") {
    include "Views/buku/page_editbuku.php";
} elseif ($page == "editcover") {
    include "Views/buku/page_editcover.php";
} elseif ($page == "pinjaman") {
    include "Views/page_peminjaman.php";
} elseif ($page == "pinjamankonfirmasi") {
    include "Views/page_sudahkonfirmasi.php";
} elseif ($page == "bukudiambil") {
    include "Views/page_bukudiambil.php";
} elseif ($page == "bukubelumkembali") {
    include "Views/page_bukubelumkembali.php";
} elseif ($page == "detailpinjaman") {
    include "Views/pinjaman/page_detailpinjaman.php";
} elseif ($page == "dataanggota") {
    include "Views/page_anggota.php";
}
// routing administrator
elseif ($page == "administrator") {
    include "Views/page_administrator.php";
} elseif ($page == "tambahakun") {
    include "Views/page_tambahakun.php";
}
