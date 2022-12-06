<!-- <?php
        if (empty($_SESSION['username'])) {
            header('location: ../Auth/page_login.php');
        }
        ?> -->

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-2">
    <!-- <h1 class="h4 mb-0 text-gray-800">Selamat Datang <?php echo $_SESSION['nama']; ?></h1> -->
    <h1 class="h4 mb-0 text-gray-800">Dashboard</h1>
    <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
</div>
<!-- <div mb-2> -->
<!-- Menampilkan flash data [pesan saat data berhasil disimpan]-->
<!-- </?php if (isset($_SESSION['msg-dashboard'])) { ?>  
    <div class="alert alert-success alert-dismissible fade show" role="alert"> </?php echo $_SESSION['msg-dashboard']; ?> </div>
    </?php unset($_SESSION['msg-dashboard']); } ?> -->

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php if (isset($_SESSION['sukses'])) { ?>
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 15000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })
        Toast.fire({
            icon: 'success',
            title: '<?php echo $_SESSION['sukses']; ?>'
        })
    </script>
<?php unset($_SESSION['sukses']);
} ?>

<!-- </div> -->
<!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-500">Dashboard ADMIN</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div> -->

<!-- Content Row -->

<div class="row">
    <div class="col-xl-12 col-lg-7 mb-1">
        <div class="card shadow mb-3">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-info">SISTEM PENDUKUNG KEPUTUSAN - PRIORITAS PENENTUAN BALITA STUNTING</h6>
            </div>
            <div class="card-body">
                <center>
                    <img class="logo2" src="../Images/logo.png" alt="" width="200%" style="z-index: 1;">
                </center>
                <br>
                <p align="justify"><strong>SISTEM PENDUKUNG KEPUTUSAN - PRIORITAS PENENTUAN BALITA STUNTING</strong> | merupakan sistem yang dapat menentukan prioritas balita terkena stunting dengan kriteria yang telah ditentukan.
                </p>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <!-- <?php
            // mengambil data table
            $data_admin = mysqli_query($connect, "SELECT * FROM tbl_admin");
            $data_balita = mysqli_query($connect, "SELECT * FROM tbl_balita");

            // jumlah data table
            $jumlah_admin = mysqli_num_rows($data_admin);
            $jumlah_balita = mysqli_num_rows($data_balita);


            ?> -->
    <!-- DATA ADMIN -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xxs font-weight-bold text-info text-uppercase mb-1">
                            <a class="text-info" href="index.php?page=administrator"> ADMIN </a>
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $jumlah_admin; ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-user fa-2x text-gray-600"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END DATA ADMIN -->

    <!-- Data Balita -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xxs font-weight-bold text-info text-uppercase mb-1">
                            <a class="text-info" href="index.php?page=administrator"> Balita </a>
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $jumlah_balita; ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-user fa-2x text-gray-600"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end data balita -->
</div>