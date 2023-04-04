<?php
//Deklarasi PAGE + filter
$page = filter_var($_GET['page'], FILTER_SANITIZE_URL);

if ($page == "dashboard") {
    include "Views/page_dashboard.php";
} elseif ($page == "balita") {
    include "Views/page_balita.php";
} elseif ($page == "tambahbalita") {
    include "Views/balita/page_tambahbalita.php";
} elseif ($page == "detailbalita") {
    include "Views/buku/page_detailbalita.php";
} elseif ($page == "editbalita") {
    include "Views/balita/page_editbalita.php";
} elseif ($page == "zscore") {
    include "Views/page_zscore.php";
} elseif ($page == "datamatriks") {
    include "Views/page_datamatriks.php";
} elseif ($page == "databobot") {
    include "Views/page_bobot.php";
} elseif ($page == "dataternormalisasi") {
    include "Views/normalisasi.php";
} elseif ($page == "datamtk") {
    include "Views/page_datamtk.php";
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
