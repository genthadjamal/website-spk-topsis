<!-- Page pesanan -->
<h1 class="h3 mb-2 text-gray-800">Hasil Z-Score</h1>
<p class="mb-4"> Menampilkan data hasil z-score berdasarkan data balita yang telah diinputkan pada<a class="text-info" target="_blank" href="../index.php" target="_blank">SISTEM PENDUKUNG KEPUTUSAN</a>.</p>

<!-- ALERT FLASH MESSAGE -->

<!-- Alert Berhasil -->
<!-- <div mb-2> 
    </?php if (isset($_SESSION['flash-y'])) { ?>  
    <div class="alert alert-success alert-dismissible fade show" role="alert"> </?php echo $_SESSION['flash-y']; ?> </div>
    </?php unset($_SESSION['flash-y']); } ?>
</div> -->

<!-- Alert Gagal -->
<!-- <div mb-2> 
    </?php if (isset($_SESSION['flash-n'])) { ?>  
    <div class="alert alert-danger alert-dismissible fade show" role="alert"> </?php echo $_SESSION['flash-n']; ?> </div>
    </?php unset($_SESSION['flash-n']); } ?>
</div> -->
<!--END ALERT FLASH MESSAGE -->

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-info">Data hasil perhitungan Z-Score</h6>
    </div>

    <div class="card-body">

        <!-- TOMBOL TAMBAH -->
        <div class="d-sm-flex align-items-center justify-content-between mb-0">
            <!-- <button class="btn btn-info" type="button" href="#" data-toggle="modal" data-target="#tambahpesanan"><i class="fas fa-fw fa-plus"></i> Tambah pesanan </button> <br><br> -->

            <!-- <a href="cetak_pdf/cetak_pesanan.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-download fa-sm text-white-50"></i> Cetak Data</a> -->
        </div>
        <!-- <a href="cetak_pesanan.php"> <button class="btn btn-primary" type="button" href="#"> Cetak Data </button> </a> <br><br> -->

        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>Nama</th>
                        <th>BB/U</th>
                        <th>TB/U</th>
                        <th>BB/TB</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $data = mysqli_query($connect, "SELECT * FROM tbl_balita");
                    $no = 1;
                    while ($balita = mysqli_fetch_array($data)) {
                    ?>
                        <tr>
                            <td> <?= $no++ ?></td>
                            <td> <?= $balita['nama_balita'] ?></td>

                            <?php
                            if ($balita['jenis_kelamin'] == 'Perempuan') {
                                if ($balita['umur'] == 0) {
                                    $median = 3.2;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 2.8);
                                        echo "<td><?= $zscore; ?></td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (3.7 - $median);
                                        echo "<td><?= $zscore; ?></td>";
                                    }
                                } else if ($balita['umur'] == 1) {
                                    $median = 4.2;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 3.6);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (4.8 - $median);
                                        echo "<td>$zscore </td>";
                                    }
                                } else if ($balita['umur'] == 2) {
                                    $median = 5.1;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 4.5);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (5.8 - $median);
                                        echo "<td>$zscore </td>";
                                    }
                                } else if ($balita['umur'] == 3) {
                                    $median = 5.8;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 5.2);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (6.6 - $median);
                                        echo "<td>$zscore </td>";
                                    }
                                } else if ($balita['umur'] == 4) {
                                    $median = 6.4;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 5.7);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (7.3 - $median);
                                        echo "<td>$zscore </td>";
                                    }
                                } else if ($balita['umur'] == 5) {
                                    $median = 6.9;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 6.1);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (7.8 - $median);
                                        echo "<td>$zscore </td>";
                                    }
                                } else if ($balita['umur'] == 6) {
                                    $median = 7.3;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 6.5);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (8.2 - $median);
                                        echo "<td>$zscore </td>";
                                    }
                                } else if ($balita['umur'] == 7) {
                                    $median = 7.6;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 6.8);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (8.6 - $median);
                                        echo "<td>$zscore </td>";
                                    }
                                } else if ($balita['umur'] == 8) {
                                    $median = 7.9;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 7.0);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (9.0 - $median);
                                        echo "<td>$zscore </td>";
                                    }
                                } else if ($balita['umur'] == 9) {
                                    $median = 8.2;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 7.3);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (9.3 - $median);
                                        echo "<td>$zscore </td>";
                                    }
                                } else if ($balita['umur'] == 10) {
                                    $median = 8.5;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 7.5);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (9.6 - $median);
                                        echo "<td>$zscore </td>";
                                    }
                                } else if ($balita['umur'] == 11) {
                                    $median = 8.7;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 7.7);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (9.9 - $median);
                                        echo "<td>$zscore </td>";
                                    }
                                } else if ($balita['umur'] == 12) {
                                    $median = 8.9;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 7.9);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (10.1 - $median);
                                        echo "<td>$zscore </td>";
                                    }
                                } else if ($balita['umur'] == 13) {
                                    $median = 9.2;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 8.1);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (10.4 - $median);
                                        echo "<td>$zscore </td>";
                                    }
                                } else if ($balita['umur'] == 14) {
                                    $median = 9.4;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 8.3);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (10.6 - $median);
                                        echo "<td>$zscore </td>";
                                    }
                                } else if ($balita['umur'] == 15) {
                                    $median = 9.6;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 8.5);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (10.9 - $median);
                                        echo "<td>$zscore </td>";
                                    }
                                } else if ($balita['umur'] == 16) {
                                    $median = 9.8;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 8.7);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (11.1 - $median);
                                        echo "<td>$zscore </td>";
                                    }
                                } else if ($balita['umur'] == 17) {
                                    $median = 10.0;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 8.9);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (11.4 - $median);
                                        echo "<td>$zscore </td>";
                                    }
                                } else if ($balita['umur'] == 18) {
                                    $median = 10.2;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 9.1);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (11.6 - $median);
                                        echo "<td>$zscore </td>";
                                    }
                                } else if ($balita['umur'] == 19) {
                                    $median = 10.4;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 9.2);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (11.8 - $median);
                                        echo "<td>$zscore </td>";
                                    }
                                } else if ($balita['umur'] == 20) {
                                    $median = 10.6;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 9.4);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (12.1 - $median);
                                        echo "<td>$zscore </td>";
                                    }
                                }


                                echo "<td>Ini Perempuan</td>";
                            } else if ($balita['jenis_kelamin'] == 'Laki-laki') {
                                if ($balita['umur'] == 0) {
                                    $median = 3.3;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 2.9);
                                        echo "<td><?= $zscore; ?></td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (3.9 - $median);
                                        echo "<td><?= $zscore; ?></td>";
                                    }
                                } else if ($balita['umur'] == 1) {
                                    $median = 4.5;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 3.9);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (5.1 - $median);
                                        echo "<td>$zscore </td>";
                                    }
                                } else if ($balita['umur'] == 2) {
                                    $median = 5.6;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 4.9);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (6.3 - $median);
                                        echo "<td> $zscore </td>";
                                    }
                                } else if ($balita['umur'] == 3) {
                                    $median = 6.4;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 5.7);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (7.2 - $median);
                                        echo "<td> $zscore </td>";
                                    }
                                } else if ($balita['umur'] == 4) {
                                    $median = 7.0;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 6.2);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (7.8 - $median);
                                        echo "<td> $zscore </td>";
                                    }
                                } else if ($balita['umur'] == 5) {
                                    $median = 7.5;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 6.7);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (8.4 - $median);
                                        echo "<td> $zscore </td>";
                                    }
                                } else if ($balita['umur'] == 6) {
                                    $median = 7.9;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 7.1);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (8.8 - $median);
                                        echo "<td> $zscore </td>";
                                    }
                                } else if ($balita['umur'] == 7) {
                                    $median = 8.3;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 7.4);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (9.2 - $median);
                                        echo "<td> $zscore </td>";
                                    }
                                } else if ($balita['umur'] == 8) {
                                    $median = 8.6;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 7.7);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (9.6 - $median);
                                        echo "<td> $zscore </td>";
                                    }
                                } else if ($balita['umur'] == 9) {
                                    $median = 8.9;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 8.0);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (9.9 - $median);
                                        echo "<td> $zscore </td>";
                                    }
                                } else if ($balita['umur'] == 10) {
                                    $median = 9.2;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 8.2);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (10.2 - $median);
                                        echo "<td> $zscore </td>";
                                    }
                                } else if ($balita['umur'] == 11) {
                                    $median = 9.4;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 8.4);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (10.5 - $median);
                                        echo "<td> $zscore </td>";
                                    }
                                } else if ($balita['umur'] == 12) {
                                    $median = 9.6;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 8.6);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (10.8 - $median);
                                        echo "<td> $zscore </td>";
                                    }
                                } else if ($balita['umur'] == 13) {
                                    $median = 9.9;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 8.8);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (11.0 - $median);
                                        echo "<td> $zscore </td>";
                                    }
                                } else if ($balita['umur'] == 14) {
                                    $median = 10.1;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 9.0);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (11.3 - $median);
                                        echo "<td> $zscore </td>";
                                    }
                                } else if ($balita['umur'] == 15) {
                                    $median = 10.3;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 9.2);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (11.5 - $median);
                                        echo "<td> $zscore </td>";
                                    }
                                } else if ($balita['umur'] == 16) {
                                    $median = 10.5;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 9.4);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (11.7 - $median);
                                        echo "<td> $zscore </td>";
                                    }
                                } else if ($balita['umur'] == 17) {
                                    $median = 10.7;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 9.6);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (12.0 - $median);
                                        echo "<td> $zscore </td>";
                                    }
                                } else if ($balita['umur'] == 18) {
                                    $median = 10.9;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 9.8);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (12.2 - $median);
                                        echo "<td> $zscore </td>";
                                    }
                                } else if ($balita['umur'] == 19) {
                                    $median = 11.1;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 10.0);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (12.5 - $median);
                                        echo "<td> $zscore </td>";
                                    }
                                } else if ($balita['umur'] == 20) {
                                    $median = 11.3;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 10.1);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (12.7 - $median);
                                        echo "<td> $zscore </td>";
                                    }
                                } else if ($balita['umur'] == 21) {
                                    $median = 11.5;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 10.3);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (12.9 - $median);
                                        echo "<td> $zscore </td>";
                                    }
                                } else if ($balita['umur'] == 22) {
                                    $median = 11.8;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 10.5);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (13.2 - $median);
                                        echo "<td> $zscore </td>";
                                    }
                                } else if ($balita['umur'] == 23) {
                                    $median = 12.0;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 10.7);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (13.4 - $median);
                                        echo "<td> $zscore </td>";
                                    }
                                } else if ($balita['umur'] == 24) {
                                    $median = 12.2;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 10.8);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (13.6 - $median);
                                        echo "<td> $zscore </td>";
                                    }
                                } else if ($balita['umur'] == 25) {
                                    $median = 12.4;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 11.0);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (13.9 - $median);
                                        echo "<td> $zscore </td>";
                                    }
                                } else if ($balita['umur'] == 26) {
                                    $median = 12.5;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 11.2);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (14.1 - $median);
                                        echo "<td> $zscore </td>";
                                    }
                                } else if ($balita['umur'] == 27) {
                                    $median = 12.7;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 11.3);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (14.3 - $median);
                                        echo "<td> $zscore </td>";
                                    }
                                } else if ($balita['umur'] == 28) {
                                    $median = 12.9;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 11.5);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (14.5 - $median);
                                        echo "<td> $zscore </td>";
                                    }
                                } else if ($balita['umur'] == 29) {
                                    $median = 13.1;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 11.7);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (14.8 - $median);
                                        echo "<td> $zscore </td>";
                                    }
                                } else if ($balita['umur'] == 30) {
                                    $median = 13.3;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 11.8);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (15.0 - $median);
                                        echo "<td> $zscore </td>";
                                    }
                                } else if ($balita['umur'] == 31) {
                                    $median = 13.5;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 12.0);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (15.2 - $median);
                                        echo "<td> $zscore </td>";
                                    }
                                } else if ($balita['umur'] == 32) {
                                    $median = 13.7;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 12.1);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (15.4 - $median);
                                        echo "<td> $zscore </td>";
                                    }
                                } else if ($balita['umur'] == 33) {
                                    $median = 13.8;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 12.3);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (15.6 - $median);
                                        echo "<td> $zscore </td>";
                                    }
                                } else if ($balita['umur'] == 34) {
                                    $median = 14.0;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 12.4);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (15.8 - $median);
                                        echo "<td> $zscore </td>";
                                    }
                                } else if ($balita['umur'] == 35) {
                                    $median = 14.2;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 12.6);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (16.0 - $median);
                                        echo "<td> $zscore </td>";
                                    }
                                } else if ($balita['umur'] == 36) {
                                    $median = 14.3;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 12.7);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (16.2 - $median);
                                        echo "<td> $zscore </td>";
                                    }
                                } else if ($balita['umur'] == 37) {
                                    $median = 14.5;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 12.9);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (16.4 - $median);
                                        echo "<td> $zscore </td>";
                                    }
                                } else if ($balita['umur'] == 38) {
                                    $median = 14.7;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 13.0);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (16.6 - $median);
                                        echo "<td> $zscore </td>";
                                    }
                                } else if ($balita['umur'] == 39) {
                                    $median = 14.8;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 13.1);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (16.8 - $median);
                                        echo "<td> $zscore </td>";
                                    }
                                } else if ($balita['umur'] == 40) {
                                    $median = 15.0;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 13.3);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (17.0 - $median);
                                        echo "<td> $zscore </td>";
                                    }
                                } else if ($balita['umur'] == 41) {
                                    $median = 15.2;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 13.4);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (17.2 - $median);
                                        echo "<td> $zscore </td>";
                                    }
                                } else if ($balita['umur'] == 42) {
                                    $median = 15.3;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 13.6);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (17.4 - $median);
                                        echo "<td> $zscore </td>";
                                    }
                                } else if ($balita['umur'] == 43) {
                                    $median = 15.5;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 13.7);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (17.6 - $median);
                                        echo "<td> $zscore </td>";
                                    }
                                } else if ($balita['umur'] == 44) {
                                    $median = 15.7;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 13.8);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (17.8 - $median);
                                        echo "<td> $zscore </td>";
                                    }
                                } else if ($balita['umur'] == 45) {
                                    $median = 15.8;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 14.0);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (18.0 - $median);
                                        echo "<td> $zscore </td>";
                                    }
                                } else if ($balita['umur'] == 46) {
                                    $median = 16.0;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 14.1);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (18.2 - $median);
                                        echo "<td> $zscore </td>";
                                    }
                                } else if ($balita['umur'] == 47) {
                                    $median = 16.2;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 14.3);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (18.4 - $median);
                                        echo "<td> $zscore </td>";
                                    }
                                } else if ($balita['umur'] == 48) {
                                    $median = 16.3;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 14.4);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (18.6 - $median);
                                        echo "<td> $zscore </td>";
                                    }
                                } else if ($balita['umur'] == 49) {
                                    $median = 16.5;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 14.5);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (18.8 - $median);
                                        echo "<td> $zscore </td>";
                                    }
                                } else if ($balita['umur'] == 50) {
                                    $median = 16.7;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 14.7);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (19.0 - $median);
                                        echo "<td> $zscore </td>";
                                    }
                                } else if ($balita['umur'] == 51) {
                                    $median = 16.8;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 14.8);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (19.2 - $median);
                                        echo "<td> $zscore </td>";
                                    }
                                } else if ($balita['umur'] == 52) {
                                    $median = 17.0;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 15.0);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (19.4 - $median);
                                        echo "<td> $zscore </td>";
                                    }
                                } else if ($balita['umur'] == 53) {
                                    $median = 17.2;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 15.1);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (19.6 - $median);
                                        echo "<td> $zscore </td>";
                                    }
                                } else if ($balita['umur'] == 54) {
                                    $median = 17.3;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 15.2);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (19.8 - $median);
                                        echo "<td> $zscore </td>";
                                    }
                                } else if ($balita['umur'] == 55) {
                                    $median = 17.5;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 15.4);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (20.0 - $median);
                                        echo "<td> $zscore </td>";
                                    }
                                } else if ($balita['umur'] == 56) {
                                    $median = 17.7;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 15.5);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (20.2 - $median);
                                        echo "<td> $zscore </td>";
                                    }
                                } else if ($balita['umur'] == 57) {
                                    $median = 17.8;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 15.6);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (20.4 - $median);
                                        echo "<td> $zscore </td>";
                                    }
                                } else if ($balita['umur'] == 58) {
                                    $median = 18.0;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 15.8);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (20.6 - $median);
                                        echo "<td> $zscore </td>";
                                    }
                                } else if ($balita['umur'] == 59) {
                                    $median = 18.2;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 15.9);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (20.8 - $median);
                                        echo "<td> $zscore </td>";
                                    }
                                } else if ($balita['umur'] == 60) {
                                    $median = 18.3;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 16.0);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (21.0 - $median);
                                        echo "<td> $zscore </td>";
                                    }
                                }
                            } else {
                                echo "<td>jenis kelamin tidak ditemukan</td>";
                            }
                            ?>



                            <td> <?= $peminjaman['judul_buku'] ?></td>
                            <td> <?= $peminjaman['nama_peminjam'] ?></td>
                            <td> <?= $peminjaman['id_anggota'] ?></td>
                            <td> <?= $peminjaman['tanggal_pinjam'] ?></td>
                            <td> <?= $peminjaman['tanggal_kembali'] ?></td>
                            <td>

                                <center>
                                    <?php if ($peminjaman['status_peminjaman'] == 'Belum Dikonfirmasi') { ?>
                                        <p class="text-light bg-warning">Belum Konfirmasi</p>
                                    <?php } else { ?>
                                        <p class="text-light bg-success">Sudah Dikonfirmasi</p>
                                    <?php } ?>
                                </center>
                            </td>
                            <td>
                                <center>
                                    <?php if ($peminjaman['status_buku'] == 'Belum Diambil') { ?>
                                        <p class="text-light bg-warning">Belum diambil</p>
                                    <?php } elseif ($peminjaman['status_buku'] == 'Sudah Diambil') { ?>
                                        <p class="text-light bg-success">Sudah Diambil</p>
                                    <?php } elseif ($peminjaman['status_buku'] == 'Belum Kembali') { ?>
                                        <p class="text-light bg-danger">Belum Kembali</p>
                                    <?php } ?>
                                </center>
                            </td>
                            <td>
                                <a class="btn btn-warning" href="index.php?page=detailpinjaman&id_peminjam=<?= $peminjaman['id_peminjam']; ?>"><i class="bi bi-pencil-fill"></i></a>
                                <a href="function/hapus_peminjaman.php?id_peminjam=<?= $peminjaman['id_peminjam']; ?>" class="btn btn-danger flash-hapus"><i class="bi bi-trash"></i></a>
                            </td>

                        </tr>

                        <!-- MODAL EDIT DATA -->
                        <div class="modal fade" id="editpeminjaman<?php echo $peminjaman['id_peminjam'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="fw-bolder modal-title" id="exampleModalLabel">Edit Data Pinjaman</h5>
                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="function/func_peminjaman.php" method="POST" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="form-group col-md-12">
                                                    <label for="">ID peminjaman</label>
                                                    <input type="text" class="form-control" name="id_peminjam" placeholder="" value="<?php echo $peminjaman['id_peminjam']; ?>" readonly>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label for="">Nama pesanan</label>
                                                    <input type="text" class="form-control" name="nama_pesanan" placeholder="" value="<?php echo $pesanan['nama_pesanan']; ?>">
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label for="">Harga pesanan</label>
                                                    <input type="text" class="form-control" name="harga_pesanan" placeholder="" value="<?php echo $pesanan['harga_pesanan']; ?>">
                                                </div>
                                            </div>

                                            <div class="modal-footer">
                                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                                <button type="submit" name="editdatapesanan" class="btn btn-info">Simpan</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END MODAL EDIT DATA -->
                    <?php } ?>

                </tbody>
            </table>
        </div>
    </div>
</div>


<!-- MODAL TAMBAH pesanan -->
<div class="modal fade" id="tambahpesanan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="fw-bolder modal-title" id="exampleModalLabel">Tambah Data pesanan</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="function/func_pesanan.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group col-md-12">
                        <label for="">Kategori</label>
                        <select class="form-control" name="kategori">
                            <option value="" selected disabled>Pilih</option>
                            <?php
                            include 'function/function.php';
                            $data = mysqli_query($connect, "SELECT * FROM tbl_produk");
                            while ($produk = mysqli_fetch_array($data)) {
                            ?>
                                <option value="<?php echo $produk['nama_produk'] ?>"><?php echo $produk['kategori'] ?> - <?php echo $produk['nama_produk'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="">Nama pesanan</label>
                        <input type="text" class="form-control" name="nama_pesanan">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="">Harga pesanan</label>
                        <input type="number" class="form-control" name="harga_pesanan">
                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <button type="submit" name="tambahdatapesanan" class="btn btn-info">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- END MODAL TAMBAH pesanan -->


<!-- SCRIPT -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- MODAL HAPUS-->
<script>
    $('.flash-hapus').on('click', function() {
        var getLink = $(this).attr('href');
        Swal.fire({
            title: "Yakin hapus data?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            confirmButtonText: 'Ya',
            cancelButtonColor: '#3085d6',
            cancelButtonText: "Batal"

        }).then(result => {
            //jika klik ya maka arahkan ke proses.php
            if (result.isConfirmed) {
                window.location.href = getLink
            }
        })
        return false;
    });
</script>

<!-- alert berhasil -->
<?php if (isset($_SESSION['flash-y'])) { ?>
    <script>
        Swal.fire(
            'Berhasil',
            '<?php echo $_SESSION['flash-y']; ?>',
            'success'
        )
    </script>
<?php unset($_SESSION['flash-y']);
} ?>

<!-- alert gagal -->
<?php if (isset($_SESSION['flash-n'])) { ?>
    <script>
        Swal.fire(
            'Gagal',
            '<?php echo $_SESSION['flash-n']; ?>',
            'error'
        )
    </script>
<?php unset($_SESSION['flash-n']);
} ?>