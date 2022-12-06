<?php
session_start();
include('config/database.php');
if (empty($_SESSION['username']) && empty($_SESSION['email'])) {
    header('location: Auth/page_login.php'); //jika belum login, maka dikembalikan ke halaman login
}

$timeout = 15; // setting timeout dalam menit
$logout = "Auth/page_login.php"; // redirect halaman logout

$timeout = $timeout * 60; // menit ke detik
if (isset($_SESSION['start_session'])) { // jika session sudah ada
    $elapsed_time = time() - $_SESSION['start_session']; // hitung waktu yang telah berlalu
    if ($elapsed_time >= $timeout) { // jika waktu yang telah berlalu lebih dari timeout
        $_SESSION['sesiberakhir'] = 'Sesi telah berakhir'; // set notifikasi sesi berakhir
        session_destroy(); // destroy session
    }
}
$_SESSION['start_session'] = time(); // set session baru yang mulai berlaku

date_default_timezone_set('Asia/Jakarta'); // set waktu zona
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard SPK - TOPSIS</title>

    <!-- Custom fonts for this template-->
    <link href="resource/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="resource/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="resource/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="images/favicon.png">

    <!-- ICON BOOSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>

<body>
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon">
                    <!-- <img src="images/logo-full.png" alt="" width="200px"> -->
                    <h3>SPK</h3>
                </div>
                <!-- <div class="sidebar-brand-text mx-3">Admin <sup></sup></div> -->
                <!-- <div class="sidebar-brand-text xs-3"> ADJI NEON<sup></sup></div> -->
                <!-- <a href="index.php"><img src="images/logo-full.png" alt="" width="200px"></a> -->
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                ADMIN
            </div>

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.php?page=dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Menu
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <!-- WISATA Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="index.php?page=balita">
                    <i class="fas fa-fw fa-box"></i>
                    <span> Data Balita</span>
                </a>
                <a class="nav-link" href="index.php?page=pinjaman">
                    <i class="fas fa-fw fa-shopping-cart"></i>
                    <span> Data Pinjaman</span>
                </a>
                <a class="nav-link" href="index.php?page=pinjamankonfirmasi">
                    <i class="fas fa-fw fa-shopping-cart"></i>
                    <span> Data Pinjaman Sudah Konfirmasi</span>
                </a>
                <a class="nav-link" href="index.php?page=bukudiambil">
                    <i class="fas fa-fw fa-box"></i>
                    <span>Buku Diambil</span>
                </a>
                <a class="nav-link" href="index.php?page=bukubelumkembali">
                    <i class="fas fa-fw fa-box"></i>
                    <span>Buku Belum Kembali</span>
                </a>
                <a class="nav-link" href="index.php?page=dataanggota">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Data Anggota</span>
                </a>
                <!-- <a class="nav-link" href="index.php?page=galeri">
                    <i class="fas fa-fw fa-image"></i>
                    <span> Data Galeri</span>
                </a> -->
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Heading -->
            <div class="sidebar-heading">
                Setting
            </div>

            <!-- AKUN Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="index.php?page=administrator">
                    <i class="fas fa-fw fa-user"></i>
                    <span> Administrator </span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-0">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span id="date_time" class="d-none d-lg-inline text-gray-600 small">
                                    <?php //echo date('l, d-m-Y h:i:s A'); 
                                    ?>
                                </span>
                            </a>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['username']; ?></span>
                                <img class="img-profile rounded-circle" src="images/user.png">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="index.php?page=administrator">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <!-- <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a> -->
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Anda yakin mau Logout?</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true"> × </span>
                                </button>
                            </div>
                            <div class="modal-body">Silahkan pilih "Logout" jika ingin keluar <br> pilih Cancel untuk membatalkan</div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                <a class="btn btn-info" href="Auth/page_logout.php">Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- PAGE ROUTING -->
                    <?php
                    // error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
                    include "Routes/routing.php";
                    ?>

                    <div class="row">

                    </div>

                    <!-- Content Row -->
                    <div class="row">

                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; <a class="text-info" href="#" target="_blank">tim magang diskominfosan </a>2022</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="resource/vendor/jquery/jquery.min.js"></script>
    <script src="resource/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="resource/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="resource/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="resource/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="resource/js/demo/chart-area-demo.js"></script>
    <script src="resource/js/demo/chart-pie-demo.js"></script>

    <!-- Page level plugins datatables -->
    <script src="resource/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="resource/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="resource/js/demo/datatables-demo.js"></script>

    <!-- ALERT fade -->
    <script>
        $(document).ready(function() {
            window.setTimeout(function() {
                $(".alert").fadeTo(500, 0).slideUp(500, function() {
                    $(this).remove();
                });
            }, 4000);
        });
    </script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php if (isset($_SESSION['sesiberakhir'])) { ?>
        <script>
            let timerInterval
            Swal.fire({
                title: 'Sesi Berakhir',
                html: 'I will close in <b></b> milliseconds. <br> <?php echo $_SESSION['sesiberakhir']; ?>',
                timer: 5000,
                timerProgressBar: true,
                didOpen: () => {
                    Swal.showLoading()
                    const b = Swal.getHtmlContainer().querySelector('b')
                    timerInterval = setInterval(() => {
                        b.textContent = Swal.getTimerLeft()
                    }, 100)
                },
                willClose: () => {
                    clearInterval(timerInterval)
                }
            }).then((result) => {
                /* Read more about handling dismissals below */
                if (result.dismiss === Swal.DismissReason.timer) {
                    console.log('I was closed by the timer')
                }
            })
        </script>
    <?php unset($_SESSION['sesiberakhir']);
    } ?>

    <script type="text/javascript">
        window.onload = date_time('date_time')

        function date_time(id) {
            date = new Date;
            tahun = date.getFullYear();
            bulan = date.getMonth();
            tanggal = date.getDate();
            hari = date.getDay();

            namabulan = new Array('Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');
            namahari = new Array('Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu');

            h = date.getHours();
            if (h < 10) {
                h = "0" + h;
            }
            m = date.getMinutes();
            if (m < 10) {
                m = "0" + m;
            }
            s = date.getSeconds();
            if (s < 10) {
                s = "0" + s;
            }

            //susun dengan format baru
            result = namahari[hari] + ', ' + tanggal + ' ' + namabulan[bulan] + ' ' + tahun + ' / ' + h + ':' + m + ':' + s;
            document.getElementById(id).innerHTML = result;
            setTimeout('date_time("' + id + '");', '1000');
            return true;
        }
    </script>
</body>

</html>