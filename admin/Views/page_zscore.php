<!-- Page pesanan -->
<h1 class="h3 mb-2 text-gray-800">Hasil Z-Score</h1>
<p class="mb-4"> Menampilkan data hasil z-score berdasarkan data balita yang telah diinputkan pada<a class="text-info" target="_blank" href="../index.php" target="_blank">SISTEM PENDUKUNG KEPUTUSAN</a>.</p>

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
            <table class="table table-bordered multi-table" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
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
                            <td><?= $balita['jenis_kelamin']; ?></td>
                            <!-- bb/u -->
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
                                } else if ($balita['umur'] == 21) {
                                    $median = 10.9;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 9.6);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (12.3 - $median);
                                        echo "<td>$zscore </td>";
                                    }
                                } else if ($balita['umur'] == 22) {
                                    $median = 11.1;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 9.8);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (12.5 - $median);
                                        echo "<td>$zscore </td>";
                                    }
                                } else if ($balita['umur'] == 23) {
                                    $median = 11.3;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 10.0);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (12.8 - $median);
                                        echo "<td>$zscore </td>";
                                    }
                                } else if ($balita['umur'] == 24) {
                                    $median = 11.5;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 10.2);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (13.0 - $median);
                                        echo "<td>$zscore </td>";
                                    }
                                } else if ($balita['umur'] == 25) {
                                    $median = 11.7;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 10.3);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (13.3 - $median);
                                        echo "<td>$zscore </td>";
                                    }
                                } else if ($balita['umur'] == 26) {
                                    $median = 11.9;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 10.5);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (13.5 - $median);
                                        echo "<td>$zscore </td>";
                                    }
                                } else if ($balita['umur'] == 27) {
                                    $median = 12.1;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 10.7);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (13.7 - $median);
                                        echo "<td>$zscore </td>";
                                    }
                                } else if ($balita['umur'] == 28) {
                                    $median = 12.3;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 10.9);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (14.0 - $median);
                                        echo "<td>$zscore </td>";
                                    }
                                } else if ($balita['umur'] == 29) {
                                    $median = 12.5;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 11.1);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (14.2 - $median);
                                        echo "<td>$zscore </td>";
                                    }
                                } else if ($balita['umur'] == 30) {
                                    $median = 12.7;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 11.2);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (14.4 - $median);
                                        echo "<td>$zscore </td>";
                                    }
                                } else if ($balita['umur'] == 31) {
                                    $median = 12.9;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 11.4);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (14.7 - $median);
                                        echo "<td>$zscore </td>";
                                    }
                                } else if ($balita['umur'] == 32) {
                                    $median = 13.1;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 11.6);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (14.9 - $median);
                                        echo "<td>$zscore </td>";
                                    }
                                } else if ($balita['umur'] == 33) {
                                    $median = 13.3;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 11.7);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (15.1 - $median);
                                        echo "<td>$zscore </td>";
                                    }
                                } else if ($balita['umur'] == 34) {
                                    $median = 13.5;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 11.9);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (15.4 - $median);
                                        echo "<td>$zscore </td>";
                                    }
                                } else if ($balita['umur'] == 35) {
                                    $median = 13.7;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 12.0);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (15.6 - $median);
                                        echo "<td>$zscore </td>";
                                    }
                                } else if ($balita['umur'] == 36) {
                                    $median = 13.9;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 12.2);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (15.8 - $median);
                                        echo "<td>$zscore </td>";
                                    }
                                } else if ($balita['umur'] == 37) {
                                    $median = 14.0;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 12.4);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (16.0 - $median);
                                        echo "<td>$zscore </td>";
                                    }
                                } else if ($balita['umur'] == 38) {
                                    $median = 14.2;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 12.5);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (16.3 - $median);
                                        echo "<td>$zscore </td>";
                                    }
                                } else if ($balita['umur'] == 39) {
                                    $median = 14.4;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 12.7);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (16.5 - $median);
                                        echo "<td>$zscore </td>";
                                    }
                                } else if ($balita['umur'] == 40) {
                                    $median = 14.6;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 12.8);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (16.7 - $median);
                                        echo "<td>$zscore </td>";
                                    }
                                } else if ($balita['umur'] == 41) {
                                    $median = 14.8;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 13.0);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (16.9 - $median);
                                        echo "<td>$zscore </td>";
                                    }
                                } else if ($balita['umur'] == 42) {
                                    $median = 15.0;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 13.1);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (17.2 - $median);
                                        echo "<td>$zscore </td>";
                                    }
                                } else if ($balita['umur'] == 43) {
                                    $median = 15.2;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 13.3);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (17.4 - $median);
                                        echo "<td>$zscore </td>";
                                    }
                                } else if ($balita['umur'] == 44) {
                                    $median = 15.3;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 13.4);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (17.6 - $median);
                                        echo "<td>$zscore </td>";
                                    }
                                } else if ($balita['umur'] == 45) {
                                    $median = 15.5;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 13.6);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (17.8 - $median);
                                        echo "<td>$zscore </td>";
                                    }
                                } else if ($balita['umur'] == 46) {
                                    $median = 15.7;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 13.7);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (18.1 - $median);
                                        echo "<td>$zscore </td>";
                                    }
                                } else if ($balita['umur'] == 47) {
                                    $median = 15.9;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 13.9);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (18.3 - $median);
                                        echo "<td>$zscore </td>";
                                    }
                                } else if ($balita['umur'] == 48) {
                                    $median = 16.1;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 14.0);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (18.5 - $median);
                                        echo "<td>$zscore </td>";
                                    }
                                } else if ($balita['umur'] == 49) {
                                    $median = 16.3;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 14.2);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (18.8 - $median);
                                        echo "<td>$zscore </td>";
                                    }
                                } else if ($balita['umur'] == 50) {
                                    $median = 16.4;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 14.3);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (19.0 - $median);
                                        echo "<td>$zscore </td>";
                                    }
                                } else if ($balita['umur'] == 51) {
                                    $median = 16.6;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 14.5);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (19.2 - $median);
                                        echo "<td>$zscore </td>";
                                    }
                                } else if ($balita['umur'] == 52) {
                                    $median = 16.8;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 14.6);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (19.4 - $median);
                                        echo "<td>$zscore </td>";
                                    }
                                } else if ($balita['umur'] == 53) {
                                    $median = 17.0;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 14.8);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (19.7 - $median);
                                        echo "<td>$zscore </td>";
                                    }
                                } else if ($balita['umur'] == 54) {
                                    $median = 17.2;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 14.9);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (19.9 - $median);
                                        echo "<td>$zscore </td>";
                                    }
                                } else if ($balita['umur'] == 55) {
                                    $median = 17.3;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 15.1);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (20.1 - $median);
                                        echo "<td>$zscore </td>";
                                    }
                                } else if ($balita['umur'] == 56) {
                                    $median = 17.5;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 15.2);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (20.3 - $median);
                                        echo "<td>$zscore </td>";
                                    }
                                } else if ($balita['umur'] == 57) {
                                    $median = 17.7;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 15.3);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (20.6 - $median);
                                        echo "<td>$zscore </td>";
                                    }
                                } else if ($balita['umur'] == 58) {
                                    $median = 17.9;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 15.5);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (20.8 - $median);
                                        echo "<td>$zscore </td>";
                                    }
                                } else if ($balita['umur'] == 59) {
                                    $median = 18.0;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 15.6);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (21.0 - $median);
                                        echo "<td>$zscore </td>";
                                    }
                                } else if ($balita['umur'] == 60) {
                                    $median = 18.2;
                                    if ($balita['berat'] < $median) {
                                        $zscore = ($balita['berat'] - $median) / ($median - 15.8);
                                        echo "<td> $zscore </td>";
                                    } else {
                                        $zscore = ($balita['berat'] - $median) / (21.2 - $median);
                                        echo "<td>$zscore </td>";
                                    }
                                }
                                // akhir perhitungan zscore bb/u perempuan

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
                            <!-- pengkategorian status gizi -->


                            <!-- Tinggi Badan atau Panjang Badan Berdasarkan Umur -->
                            <?php
                            if ($balita['jenis_kelamin'] == 'Laki-laki') {
                                if ($balita['umur'] == 0) {
                                    $median = 49.9;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 48.0);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (51.8 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 1) {
                                    $median = 54.7;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 52.8);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (56.7 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 2) {
                                    $median = 58.4;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 56.4);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (60.4 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 3) {
                                    $median = 61.4;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 59.4);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (63.5 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 4) {
                                    $median = 63.9;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 61.8);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (66.0 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 5) {
                                    $median = 65.9;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 63.8);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (68.0 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 6) {
                                    $median = 67.6;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 65.5);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (69.8 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 7) {
                                    $median = 69.2;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 67.0);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (71.3 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 8) {
                                    $median = 70.6;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 68.4);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (72.8 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 9) {
                                    $median = 72.0;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 69.7);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (74.2 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 10) {
                                    $median = 73.3;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 71.0);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (75.6 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 11) {
                                    $median = 74.5;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 72.2);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (76.9 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 12) {
                                    $median = 75.7;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 73.4);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (78.1 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 13) {
                                    $median = 76.9;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 74.5);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (79.3 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 14) {
                                    $median = 78.0;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 75.6);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (80.5 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 15) {
                                    $median = 79.1;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 76.6);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (81.7 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 16) {
                                    $median = 80.2;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 77.6);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (82.8 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 17) {
                                    $median = 81.2;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 78.6);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (83.9 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 18) {
                                    $median = 82.3;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 79.6);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (85.0 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 19) {
                                    $median = 83.2;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 80.5);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (86.0 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 20) {
                                    $median = 84.2;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 81.4);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (87.0 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 21) {
                                    $median = 85.1;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 82.3);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (88.0 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 22) {
                                    $median = 86.0;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 83.1);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (89.0 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 23) {
                                    $median = 86.9;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 83.9);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (89.9 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 24) {
                                    $median = 87.8;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 84.8);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (90.9 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                    // 24 salah satu
                                } else if ($balita['umur'] == 25) {
                                    $median = 88.0;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 84.9);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (91.1 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 26) {
                                    $median = 88.8;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 85.6);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (92.0 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 27) {
                                    $median = 89.6;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 86.4);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (92.9 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 28) {
                                    $median = 90.4;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 87.1);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (92.9 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 29) {
                                    $median = 91.2;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 87.8);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (94.5 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 30) {
                                    $median = 91.9;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 87.8);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (95.3 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 31) {
                                    $median = 92.7;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 89.2);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (96.1 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 32) {
                                    $median = 93.4;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 89.9);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (96.9 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 33) {
                                    $median = 94.1;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 90.5);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (97.6 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 34) {
                                    $median = 94.8;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 91.1);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (98.4 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 35) {
                                    $median = 95.4;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 91.8);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (99.1 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 36) {
                                    $median = 96.1;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 92.4);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (99.8 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 37) {
                                    $median = 96.7;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 93.0);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (100.5 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 38) {
                                    $median = 97.4;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 93.6);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (101.2 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 39) {
                                    $median = 98.0;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 94.2);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (101.8 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 40) {
                                    $median = 98.6;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 94.7);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (102.5 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 41) {
                                    $median = 99.2;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 95.3);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (103.2 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 42) {
                                    $median = 99.9;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 95.9);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (103.8 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 43) {
                                    $median = 100.4;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 96.4);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (104.5 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 44) {
                                    $median = 101.0;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 97.0);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (105.1 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 45) {
                                    $median = 101.6;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 97.5);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (105.7 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 46) {
                                    $median = 102.2;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 98.1);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (106.3 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 47) {
                                    $median = 102.8;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 98.6);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (106.9 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 48) {
                                    $median = 103.3;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 99.1);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (107.5 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 49) {
                                    $median = 103.9;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 99.7);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (108.1 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 50) {
                                    $median = 104.4;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 100.2);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (108.7 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 51) {
                                    $median = 105.0;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 100.7);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (109.3 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 52) {
                                    $median = 105.6;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 101.2);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (109.9 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 53) {
                                    $median = 106.1;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 101.7);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (110.5 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 54) {
                                    $median = 106.7;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 102.3);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (111.1 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 55) {
                                    $median = 107.2;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 102.8);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (111.7 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 56) {
                                    $median = 107.8;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 103.3);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (112.3 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 57) {
                                    $median = 108.3;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 103.8);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (112.8 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 58) {
                                    $median = 108.9;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 104.3);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (113.4 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 59) {
                                    $median = 109.4;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 104.8);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (114.0 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 60) {
                                    $median = 110.0;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 105.3);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (114.6 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                }
                            }
                            ?>

                            <?php
                            if ($balita['jenis_kelamin'] == 'Perempuan') {
                                if ($balita['umur'] == 0) {
                                    $median = 49.1;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 47.3);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (51.0 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 1) {
                                    $median = 53.7;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 51.7);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (55.6 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 2) {
                                    $median = 57.1;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 55.0);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (59.1 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 3) {
                                    $median = 59.8;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 57.7);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (61.9 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 4) {
                                    $median = 62.1;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 59.9);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (64.3 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 5) {
                                    $median = 64.0;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 61.8);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (66.2 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 6) {
                                    $median = 65.7;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 63.5);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (68.0 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 7) {
                                    $median = 67.3;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 65.0);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (69.6 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 8) {
                                    $median = 68.7;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 66.4);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (71.1 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 9) {
                                    $median = 70.1;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 67.7);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (72.6 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 10) {
                                    $median = 71.5;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 69.0);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (73.9 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 11) {
                                    $median = 72.8;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 70.3);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (75.3 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 12) {
                                    $median = 74.0;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 71.4);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (76.6 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 13) {
                                    $median = 75.2;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 72.6);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (77.8 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 14) {
                                    $median = 76.4;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 73.7);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (79.1 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 15) {
                                    $median = 77.5;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 74.8);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (80.2 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 16) {
                                    $median = 78.6;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 75.8);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (81.4 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 17) {
                                    $median = 79.7;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 76.8);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (82.5 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 18) {
                                    $median = 80.7;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 77.8);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (83.6 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 19) {
                                    $median = 81.7;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 78.8);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (84.7 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 20) {
                                    $median = 82.7;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 79.7);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (85.7 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 21) {
                                    $median = 83.7;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 80.6);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (86.7 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 22) {
                                    $median = 84.6;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 81.5);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (87.7 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 23) {
                                    $median = 85.5;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 82.3);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (88.7 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 24) {
                                    $median = 86.4;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 83.2);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (89.6 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 25) {
                                    $median = 86.6;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 83.3);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (89.9 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 26) {
                                    $median = 87.4;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 84.1);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (90.8 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 27) {
                                    $median = 88.3;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 84.9);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (91.7 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 28) {
                                    $median = 89.1;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 85.7);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (92.5 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 29) {
                                    $median = 89.9;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 86.4);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (93.4 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 30) {
                                    $median = 90.7;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 87.1);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (94.2 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 31) {
                                    $median = 91.4;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 87.9);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (95.0 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 32) {
                                    $median = 92.2;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 88.6);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (95.8 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 33) {
                                    $median = 92.9;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 89.3);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (96.6 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 34) {
                                    $median = 93.6;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 89.9);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (97.4 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 35) {
                                    $median = 94.4;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 90.6);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (98.1 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 36) {
                                    $median = 95.1;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 91.2);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (98.9 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 37) {
                                    $median = 95.7;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 91.9);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (99.6 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 38) {
                                    $median = 96.4;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 92.5);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (100.3 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 39) {
                                    $median = 97.1;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 93.1);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (101.0 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 40) {
                                    $median = 97.7;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 93.8);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (101.7 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 41) {
                                    $median = 98.4;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 94.4);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (102.4 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 42) {
                                    $median = 99.0;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 95.0);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (103.1 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 43) {
                                    $median = 99.7;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 95.6);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (103.8 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 44) {
                                    $median = 100.3;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 96.2);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (104.5 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 45) {
                                    $median = 100.9;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 96.7);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (105.1 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 46) {
                                    $median = 101.5;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 97.3);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (105.8 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 47) {
                                    $median = 102.1;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 97.9);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (106.4 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 48) {
                                    $median = 102.7;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 98.4);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (107.0 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 49) {
                                    $median = 103.3;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 99.0);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (107.7 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 50) {
                                    $median = 103.9;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 99.5);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (108.3 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 51) {
                                    $median = 104.5;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 100.1);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (108.9 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 52) {
                                    $median = 105.0;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 100.6);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (109.5 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 53) {
                                    $median = 105.6;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 101.1);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (110.1 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 54) {
                                    $median = 106.2;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 101.6);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (110.7 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 55) {
                                    $median = 106.7;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 102.2);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (111.3 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 56) {
                                    $median = 107.3;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 102.7);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (111.9 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 57) {
                                    $median = 107.8;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 103.2);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (112.5 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 58) {
                                    $median = 108.4;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 103.7);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (113.0 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 59) {
                                    $median = 108.9;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 104.2);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (113.6 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                } else if ($balita['umur'] == 60) {
                                    $median = 109.4;
                                    if ($balita['tinggi'] < $median) {
                                        $zscoretb = ($balita['tinggi'] - $median) / ($median - 104.7);
                                        echo "<td>$zscoretb</td>";
                                    } else {
                                        $zscoretb = ($balita['tinggi'] - $median) / (114.2 - $median);
                                        echo "<td>$zscoretb</td>";
                                    }
                                }
                                // ini nanti minta marina (udah)
                            }
                            ?>



                            <!-- awal tb/bb cowo n cewe-->
                            <?php
                            if ($balita['jenis_kelamin'] == 'Laki-laki') {
                                if ($balita['umur'] < 24) {
                                    if ($balita['tinggi'] == 45.0) {
                                        $median = 2.4;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 2.2);
                                            echo "<td><?= $zbbtb; ?></td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (2.7 - $median);
                                            echo "<td><?= $zbbtb; ?></td>";
                                        }
                                    } else if ($balita['tinggi'] == 45.5) {
                                        $median = 2.5;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 2.3);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (2.8 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 46.0) {
                                        $median = 2.6;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 2.4);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (2.9 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 46.5) {
                                        $median = 2.7;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 2.5);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (3.0 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 47.0) {
                                        $median = 2.8;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 2.5);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (3.0 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 47.5) {
                                        $median = 2.9;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 2.6);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (3.1 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 48.0) {
                                        $median = 2.9;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 2.7);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (3.2 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 48.5) {
                                        $median = 3.0;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 2.8);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (3.3 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 49.0) {
                                        $median = 3.1;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 2.9);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (3.4 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 49.5) {
                                        $median = 3.2;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 3.0);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (3.5 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 50.0) {
                                        $median = 3.3;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 3.0);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (3.6 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 50.5) {
                                        $median = 3.4;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 3.1);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (3.8 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 50.5) {
                                        $median = 3.4;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 3.1);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (3.8 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 51.0) {
                                        $median = 3.5;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 3.2);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (3.9 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 51.5) {
                                        $median = 3.6;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 3.3);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (4.0 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 52.0) {
                                        $median = 3.8;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 3.5);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (4.1 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 52.5) {
                                        $median = 3.9;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 3.6);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (4.2 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 53.0) {
                                        $median = 4.0;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 3.7);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (4.4 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 53.5) {
                                        $median = 4.1;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 3.8);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (4.5 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 54.0) {
                                        $median = 4.3;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 3.9);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (4.7 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 54.5) {
                                        $median = 4.4;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 4.0);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (4.8 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 55.0) {
                                        $median = 4.5;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 4.2);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (5.0 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 55.5) {
                                        $median = 4.7;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 4.3);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (5.1 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 56.0) {
                                        $median = 4.8;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 4.4);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (5.3 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 56.5) {
                                        $median = 5.0;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 4.6);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (5.4 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 57.0) {
                                        $median = 5.1;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 4.7);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (5.6 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 57.5) {
                                        $median = 5.3;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 4.9);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (5.7 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 58.0) {
                                        $median = 5.4;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 5.0);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (5.9 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 58.5) {
                                        $median = 5.6;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 5.1);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (6.1 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 59.0) {
                                        $median = 5.7;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 5.3);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (6.2 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 59.5) {
                                        $median = 5.9;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 5.4);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (6.4 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 60.0) {
                                        $median = 6.0;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 5.5);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (6.5 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 60.5) {
                                        $median = 6.1;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 5.6);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (6.7 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 61.0) {
                                        $median = 6.3;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 5.8);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (6.8 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 61.5) {
                                        $median = 6.4;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 5.9);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (7.0 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 62.0) {
                                        $median = 6.5;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 6.0);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (7.1 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 62.5) {
                                        $median = 6.7;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 6.1);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (7.2 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 63.0) {
                                        $median = 6.8;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 6.2);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (7.4 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 63.5) {
                                        $median = 6.9;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 6.4);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (7.5 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 64.0) {
                                        $median = 7.0;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 6.5);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (7.6 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 64.5) {
                                        $median = 7.1;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 6.6);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (7.8 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 65.0) {
                                        $median = 7.3;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 6.7);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (7.9 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 65.5) {
                                        $median = 7.4;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 6.8);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (8.0 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 66.0) {
                                        $median = 7.5;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 6.9);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (8.2 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 66.5) {
                                        $median = 7.6;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 7.0);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (8.3 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 67.0) {
                                        $median = 7.7;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 7.1);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (8.4 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 67.5) {
                                        $median = 7.9;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 7.2);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (8.5 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 68.0) {
                                        $median = 8.0;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 7.3);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (8.7 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 68.5) {
                                        $median = 8.1;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 7.5);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (8.8 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 69.0) {
                                        $median = 8.2;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 7.6);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (8.9 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 69.5) {
                                        $median = 8.3;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 7.7);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (9.0 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 70.0) {
                                        $median = 8.4;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 7.8);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (9.2 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 70.5) {
                                        $median = 8.5;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 7.9);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (9.3 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 71.0) {
                                        $median = 8.6;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 8.0);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (9.4 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 71.5) {
                                        $median = 8.8;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 8.1);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (9.5 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 72.0) {
                                        $median = 8.9;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 8.2);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (9.6 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 72.5) {
                                        $median = 9.0;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 8.3);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (9.8 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 73.0) {
                                        $median = 9.1;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 8.4);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (9.9 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 73.5) {
                                        $median = 9.2;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 8.5);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (10.0 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 74.0) {
                                        $median = 9.3;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 8.6);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (10.1 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 74.5) {
                                        $median = 9.4;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 8.7);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (10.2 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 75.0) {
                                        $median = 9.5;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 8.8);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (10.3 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 75.5) {
                                        $median = 9.6;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 8.8);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (10.4 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 76.0) {
                                        $median = 9.7;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 8.9);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (10.6 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 76.5) {
                                        $median = 9.8;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 9.0);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (10.7 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 77.0) {
                                        $median = 9.9;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 9.1);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (10.8 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 77.5) {
                                        $median = 10.0;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 9.2);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (10.9 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 78.0) {
                                        $median = 10.1;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 9.3);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (11.0 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 78.5) {
                                        $median = 10.2;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 9.4);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (11.1 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 79.0) {
                                        $median = 10.3;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 9.5);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (11.2 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 79.5) {
                                        $median = 10.4;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 9.5);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (11.3 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 80.0) {
                                        $median = 10.4;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 9.6);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (11.4 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 80.5) {
                                        $median = 10.5;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 9.7);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (11.5 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 81.0) {
                                        $median = 10.6;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 9.8);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (11.6 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 81.5) {
                                        $median = 10.7;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 9.9);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (11.7 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 82.0) {
                                        $median = 10.8;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 10.0);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (11.8 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 82.5) {
                                        $median = 10.9;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 10.1);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (11.9 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 83.0) {
                                        $median = 11.0;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 10.2);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (12.0 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 83.5) {
                                        $median = 11.2;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 10.3);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (12.1 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 84.0) {
                                        $median = 11.3;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 10.4);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (12.2 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 84.5) {
                                        $median = 11.4;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 10.5);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (12.4 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 85.0) {
                                        $median = 11.5;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 10.6);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (12.5 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 85.5) {
                                        $median = 11.6;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 10.7);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (12.6 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 86.0) {
                                        $median = 11.7;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 10.8);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (12.8 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 86.5) {
                                        $median = 11.9;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 11.0);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (12.9 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 87.0) {
                                        $median = 12.0;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 11.1);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (13.0 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 87.5) {
                                        $median = 12.1;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 11.2);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (13.2 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 88.0) {
                                        $median = 12.2;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 11.3);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (13.3 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 88.5) {
                                        $median = 12.4;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 11.4);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (13.4 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 89.0) {
                                        $median = 12.4;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 11.4);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (13.5 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 89.5) {
                                        $median = 12.6;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 11.6);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (13.7 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 90.0) {
                                        $median = 12.7;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 11.8);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (13.8 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 90.5) {
                                        $median = 12.8;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 11.9);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (13.9 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 91.0) {
                                        $median = 13.0;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 12.0);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (14.1 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 91.5) {
                                        $median = 13.1;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 12.1);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (14.2 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 92.0) {
                                        $median = 13.2;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 12.2);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (14.3 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 92.5) {
                                        $median = 13.3;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 12.3);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (14.4 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 93.0) {
                                        $median = 13.4;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 12.4);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (14.6 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 93.5) {
                                        $median = 13.5;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 12.5);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (14.7 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 94.0) {
                                        $median = 13.7;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 12.6);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (14.8 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 94.5) {
                                        $median = 13.8;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 12.7);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (14.9 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 95.0) {
                                        $median = 13.9;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 12.8);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (15.1 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 95.5) {
                                        $median = 14.0;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 12.9);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (15.2 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 96.0) {
                                        $median = 14.1;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 13.1);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (15.3 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 96.5) {
                                        $median = 14.3;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 13.2);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (15.5 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 97.0) {
                                        $median = 14.4;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 13.3);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (15.6 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 97.5) {
                                        $median = 14.5;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 13.4);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (15.7 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 98.0) {
                                        $median = 14.6;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 13.5);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (15.9 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 98.5) {
                                        $median = 14.8;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 13.6);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (16.0 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 99.0) {
                                        $median = 14.9;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 13.7);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (16.2 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 99.5) {
                                        $median = 15.0;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 13.9);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (16.3 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 100.0) {
                                        $median = 15.2;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 14.0);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (16.5 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 100.5) {
                                        $median = 15.3;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 14.1);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (16.6 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 101.0) {
                                        $median = 15.4;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 14.2);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (16.8 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 101.5) {
                                        $median = 15.6;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 14.4);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (16.9 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 102.0) {
                                        $median = 15.7;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 14.5);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (17.1 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 102.5) {
                                        $median = 15.9;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 14.6);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (17.3 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 103.0) {
                                        $median = 16.0;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 14.8);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (17.4 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 103.5) {
                                        $median = 16.2;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 14.9);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (17.6 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 104.0) {
                                        $median = 16.3;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 15.0);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (17.8 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 104.5) {
                                        $median = 16.5;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 15.2);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (17.9 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 105.0) {
                                        $median = 16.6;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 15.3);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (18.1 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 105.5) {
                                        $median = 16.8;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 15.4);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (18.3 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 106.0) {
                                        $median = 16.9;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 15.6);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (18.5 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 106.5) {
                                        $median = 17.1;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 15.7);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (18.6 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 107.0) {
                                        $median = 17.3;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 15.9);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (18.8 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 107.5) {
                                        $median = 17.4;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 16.0);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (19.0 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 108.0) {
                                        $median = 17.6;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 16.2);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (19.2 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 108.5) {
                                        $median = 17.8;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 16.3);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (19.4 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 109.0) {
                                        $median = 17.9;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 16.5);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (19.6 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 109.5) {
                                        $median = 18.1;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 16.6);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (19.8 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 110.0) {
                                        $median = 18.3;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 16.8);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (20.0 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    }
                                } else if ($balita['umur'] >= 24) {
                                    if ($balita['tinggi'] == 65.0) {
                                        $median = 7.4;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 6.9);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (8.1 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 65.5) {
                                        $median = 7.6;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 7.0);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (8.2 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 66.0) {
                                        $median = 7.7;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 7.1);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (8.3 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 66.5) {
                                        $median = 7.8;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 7.2);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (8.5 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 67.0) {
                                        $median = 7.9;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 7.3);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (8.6 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 67.5) {
                                        $median = 8.0;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 7.4);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (8.7 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 68.0) {
                                        $median = 8.1;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 7.5);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (8.8 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 68.5) {
                                        $median = 8.2;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 7.6);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (9.0 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 69.0) {
                                        $median = 8.4;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 7.7);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (9.1 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 69.5) {
                                        $median = 8.5;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 7.8);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (9.2 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 70.0) {
                                        $median = 8.6;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 7.9);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (9.3 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 70.5) {
                                        $median = 8.7;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 8.0);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (9.5 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 71.0) {
                                        $median = 8.8;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 8.1);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (9.6 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 71.5) {
                                        $median = 8.9;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 8.2);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (9.7 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 72.0) {
                                        $median = 9.0;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 8.3);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (9.8 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 72.5) {
                                        $median = 9.1;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 8.4);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (9.9 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 73.0) {
                                        $median = 9.2;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 8.5);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (10.0 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 73.5) {
                                        $median = 9.3;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 8.6);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (10.2 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 74.0) {
                                        $median = 9.4;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 8.7);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (10.3 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 74.5) {
                                        $median = 9.5;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 8.8);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (10.4 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 75.0) {
                                        $median = 9.6;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 8.9);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (10.5 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 75.5) {
                                        $median = 9.7;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 9.0);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (10.6 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 76.0) {
                                        $median = 9.8;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 9.1);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (10.7 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 76.5) {
                                        $median = 9.9;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 9.2);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (10.8 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 77.0) {
                                        $median = 10.0;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 9.2);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (10.9 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 77.5) {
                                        $median = 10.1;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 9.3);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (11.0 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 78.0) {
                                        $median = 10.2;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 9.4);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (11.1 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 78.5) {
                                        $median = 10.3;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 9.5);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (11.2 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 79.0) {
                                        $median = 10.4;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 9.6);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (11.3 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 79.5) {
                                        $median = 10.5;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 9.7);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (11.4 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 80.0) {
                                        $median = 10.6;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 9.7);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (11.5 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 80.5) {
                                        $median = 10.7;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 9.8);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (11.6 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 81.0) {
                                        $median = 10.8;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 9.9);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (11.7 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 81.5) {
                                        $median = 10.9;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 10.0);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (11.8 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 82.0) {
                                        $median = 11.0;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 10.1);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (11.9 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 82.5) {
                                        $median = 11.1;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 10.2);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (12.1 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 83.0) {
                                        $median = 11.2;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 10.3);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (12.2 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 83.5) {
                                        $median = 11.3;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 10.4);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (12.3 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 84.0) {
                                        $median = 11.4;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 10.5);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (12.4 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 84.5) {
                                        $median = 11.5;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 10.7);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (12.5 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 85.0) {
                                        $median = 11.7;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 10.8);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (12.7 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 85.5) {
                                        $median = 11.8;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 10.9);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (12.8 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 86.0) {
                                        $median = 11.9;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 11.0);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (12.9 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 86.5) {
                                        $median = 12.0;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 11.1);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (13.1 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 87.0) {
                                        $median = 12.2;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 11.2);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (13.2 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 87.5) {
                                        $median = 12.3;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 11.3);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (13.3 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 88.0) {
                                        $median = 12.4;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 11.5);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (13.5 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 88.5) {
                                        $median = 12.5;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 11.6);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (13.6 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 89.0) {
                                        $median = 12.6;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 11.7);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (13.7 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 89.5) {
                                        $median = 12.8;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 11.8);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (13.9 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 90.0) {
                                        $median = 12.9;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 11.9);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (14.0 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 90.0) {
                                        $median = 12.9;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 11.9);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (14.0 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 90.5) {
                                        $median = 13.0;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 12.0);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (14.1 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 91.0) {
                                        $median = 13.1;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 12.1);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (14.2 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 91.5) {
                                        $median = 13.2;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 12.2);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (14.4 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 92.0) {
                                        $median = 13.4;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 12.3);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (14.5 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 92.5) {
                                        $median = 13.5;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 12.4);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (14.6 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 93.0) {
                                        $median = 13.6;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 12.6);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (14.7 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 93.5) {
                                        $median = 13.7;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 12.7);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (14.9 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 94.0) {
                                        $median = 13.8;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 12.8);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (15.0 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 94.5) {
                                        $median = 13.9;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 12.9);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (15.1 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 95.0) {
                                        $median = 14.1;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 13.0);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (15.3 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 95.5) {
                                        $median = 14.2;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 13.1);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (15.4 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 96.0) {
                                        $median = 14.3;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 13.2);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (15.5 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 96.5) {
                                        $median = 14.4;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 13.3);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (15.7 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 97.0) {
                                        $median = 14.6;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 13.4);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (15.8 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 97.5) {
                                        $median = 14.7;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 13.6);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (15.9 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 98.0) {
                                        $median = 14.8;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 13.7);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (16.1 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 98.5) {
                                        $median = 14.9;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 13.8);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (16.2 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 99.0) {
                                        $median = 15.1;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 13.9);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (16.4 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 99.5) {
                                        $median = 15.2;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 14.0);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (16.5 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 100.0) {
                                        $median = 15.4;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 14.2);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (16.7 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 100.5) {
                                        $median = 15.5;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 14.3);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (16.9 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 101.0) {
                                        $median = 15.6;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 14.4);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (17.0 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 101.5) {
                                        $median = 15.8;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 14.5);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (17.2 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 102.0) {
                                        $median = 15.9;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 14.7);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (17.3 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 102.5) {
                                        $median = 16.1;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 14.8);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (17.5 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 103.0) {
                                        $median = 16.2;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 14.9);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (17.7 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 103.5) {
                                        $median = 16.4;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 15.1);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (17.8 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 104.0) {
                                        $median = 16.5;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 15.2);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (18.0 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 104.0) {
                                        $median = 16.5;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 15.2);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (18.0 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 104.5) {
                                        $median = 16.7;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 15.4);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (18.2 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 104.5) {
                                        $median = 16.7;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 15.4);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (18.2 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 105.0) {
                                        $median = 16.8;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 15.5);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (18.4 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 105.5) {
                                        $median = 17.0;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 15.6);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (18.5 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 106.0) {
                                        $median = 17.2;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 15.8);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (18.7 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 106.5) {
                                        $median = 17.3;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 15.9);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (18.9 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 107.0) {
                                        $median = 17.5;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 16.1);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (19.1 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 107.5) {
                                        $median = 17.7;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 16.2);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (19.3 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 108.0) {
                                        $median = 17.8;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 16.4);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (19.5 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 108.5) {
                                        $median = 18.0;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 16.5);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (19.7 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 109.0) {
                                        $median = 18.2;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 16.7);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (19.8 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 109.5) {
                                        $median = 18.3;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 16.8);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (20.0 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 110.0) {
                                        $median = 18.5;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 17.0);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (20.2 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 110.5) {
                                        $median = 18.7;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 17.1);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (20.4 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 111.0) {
                                        $median = 18.9;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 17.3);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (20.7 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 111.5) {
                                        $median = 19.1;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 17.5);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (20.9 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 112.0) {
                                        $median = 19.2;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 17.6);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (21.1 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 112.5) {
                                        $median = 19.4;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 17.8);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (21.3 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 113.0) {
                                        $median = 19.6;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 18.0);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (21.5 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 113.5) {
                                        $median = 19.8;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 18.1);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (21.7 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 114.0) {
                                        $median = 20.0;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 18.3);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (21.9 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 114.5) {
                                        $median = 20.2;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 18.5);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (22.1 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 115.0) {
                                        $median = 20.4;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 18.6);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (22.4 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 115.5) {
                                        $median = 20.6;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 18.8);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (22.6 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 116.0) {
                                        $median = 20.8;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 19.0);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (22.8 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 116.5) {
                                        $median = 21.0;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 19.2);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (23.0 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 117.0) {
                                        $median = 21.2;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 19.3);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (23.3 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 117.5) {
                                        $median = 21.4;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 19.5);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (23.5 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 118.0) {
                                        $median = 21.6;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 19.7);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (23.7 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 118.5) {
                                        $median = 21.8;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 19.9);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (23.9 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 119.0) {
                                        $median = 22.0;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 20.0);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (24.1 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 119.5) {
                                        $median = 22.2;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 20.2);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (24.4 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 120.0) {
                                        $median = 22.4;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 20.4);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (24.6 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    }
                                } else {
                                    echo "<td>data tidak ditemukan</td>";
                                }
                                // awal tb/bb cewe
                            } else if ($balita['jenis_kelamin'] == 'Perempuan') {
                                if ($balita['umur'] < 24) {
                                    if ($balita['tinggi'] == 45.0) {
                                        $median = 2.5;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 2.3);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (2.7 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 45.5) {
                                        $median = 2.5;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 2.3);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (2.8 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 46.0) {
                                        $median = 2.6;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 2.4);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (2.9 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 46.5) {
                                        $median = 2.7;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 2.5);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (3.0 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 47.0) {
                                        $median = 2.8;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 2.6);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (3.1 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 47.5) {
                                        $median = 2.9;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 2.6);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (3.2 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 48.0) {
                                        $median = 3.0;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 2.7);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (3.3 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 48.5) {
                                        $median = 3.1;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 2.8);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (3.4 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 49.0) {
                                        $median = 3.2;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 2.9);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (3.5 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 49.5) {
                                        $median = 3.3;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 3.0);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (3.6 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 50.0) {
                                        $median = 3.4;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 3.1);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (3.7 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 50.5) {
                                        $median = 3.5;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 3.2);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (3.8 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 51.0) {
                                        $median = 3.6;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 3.3);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (3.9 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 51.5) {
                                        $median = 3.7;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 3.4);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (4.0 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 52.0) {
                                        $median = 3.8;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 3.5);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (4.2 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 52.5) {
                                        $median = 3.9;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 3.6);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (4.3 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 53.0) {
                                        $median = 4.0;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 3.7);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (4.4 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 53.5) {
                                        $median = 4.2;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 3.8);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (4.6 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 54.0) {
                                        $median = 4.3;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 3.9);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (4.7 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 54.5) {
                                        $median = 4.4;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 4.0);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (4.8 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 55.0) {
                                        $median = 4.5;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 4.2);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (5.0 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 55.5) {
                                        $median = 4.7;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 4.3);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (5.1 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 56.0) {
                                        $median = 4.8;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 4.4);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (5.3 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 56.5) {
                                        $median = 5.0;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 4.5);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (5.4 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 57.0) {
                                        $median = 5.1;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 4.6);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (5.6 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 57.5) {
                                        $median = 5.2;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 4.8);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (5.7 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 58.0) {
                                        $median = 5.4;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 4.9);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (5.9 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 58.5) {
                                        $median = 5.5;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 5.0);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (6.0 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 59.0) {
                                        $median = 5.6;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 5.1);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (6.2 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 59.5) {
                                        $median = 5.7;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 5.3);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (6.3 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 60.0) {
                                        $median = 5.9;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 5.4);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (6.4 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 60.5) {
                                        $median = 6.0;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 5.5);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (6.6 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 61.0) {
                                        $median = 6.1;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 5.6);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (6.7 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 61.5) {
                                        $median = 6.3;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 5.7);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (6.9 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 62.0) {
                                        $median = 6.4;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 5.8);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (7.0 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 62.5) {
                                        $median = 6.5;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 5.9);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (7.1 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 63.0) {
                                        $median = 6.6;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 6.0);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (7.3 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 63.5) {
                                        $median = 6.7;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 6.2);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (7.4 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 64.0) {
                                        $median = 6.9;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 6.3);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (7.5 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 64.5) {
                                        $median = 7.0;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 6.4);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (7.6 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 65.0) {
                                        $median = 7.1;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 6.5);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (7.8 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 65.5) {
                                        $median = 7.2;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 6.6);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (7.9 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 66.0) {
                                        $median = 7.3;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 6.7);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (8.0 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 66.5) {
                                        $median = 7.4;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 6.8);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (8.1 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 67.0) {
                                        $median = 7.5;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 6.9);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (8.3 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 67.5) {
                                        $median = 7.6;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 7.0);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (8.4 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 68.0) {
                                        $median = 7.7;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 7.1);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (8.5 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 68.5) {
                                        $median = 7.9;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 7.2);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (8.6 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 69.0) {
                                        $median = 8.0;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 7.3);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (8.7 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 69.5) {
                                        $median = 8.1;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 7.4);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (8.8 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 70.0) {
                                        $median = 8.2;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 7.5);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (9.0 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 70.5) {
                                        $median = 8.3;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 7.6);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (9.1 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 71.0) {
                                        $median = 8.4;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 7.7);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (9.2 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 71.5) {
                                        $median = 8.5;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 7.7);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (9.3 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 72.0) {
                                        $median = 8.6;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 7.8);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (9.4 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 72.0) {
                                        $median = 8.6;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 7.8);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (9.4 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 72.5) {
                                        $median = 8.7;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 7.9);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (9.5 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 73.0) {
                                        $median = 8.8;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 8.0);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (9.6 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 73.5) {
                                        $median = 8.9;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 8.1);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (9.7 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 74.0) {
                                        $median = 9.0;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 8.2);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (9.8 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 74.5) {
                                        $median = 9.1;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 8.3);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (9.9 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 75.0) {
                                        $median = 9.1;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 8.4);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (10.0 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 75.5) {
                                        $median = 9.2;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 8.5);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (10.1 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 76.0) {
                                        $median = 9.3;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 8.5);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (10.2 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 76.5) {
                                        $median = 9.4;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 8.6);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (10.3 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 77.0) {
                                        $median = 9.5;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 8.7);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (10.4 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 77.5) {
                                        $median = 9.6;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 8.8);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (10.5 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 78.0) {
                                        $median = 9.7;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 8.9);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (10.6 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 78.5) {
                                        $median = 9.8;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 9.0);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (10.7 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 79.0) {
                                        $median = 9.9;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 9.1);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (10.8 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 79.5) {
                                        $median = 10.0;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 9.1);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (10.9 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 80.0) {
                                        $median = 10.1;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 9.2);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (11.0 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 80.5) {
                                        $median = 10.2;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 9.3);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (11.2 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 81.0) {
                                        $median = 10.3;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 9.4);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (11.3 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 81.5) {
                                        $median = 10.4;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 9.5);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (11.4 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 82.0) {
                                        $median = 10.5;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 9.6);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (11.5 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 82.5) {
                                        $median = 10.6;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 9.7);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (11.6 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 83.0) {
                                        $median = 10.7;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 9.8);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (11.8 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 83.5) {
                                        $median = 10.9;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 9.9);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (11.9 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 84.0) {
                                        $median = 11.0;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 10.1);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (12.0 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 84.5) {
                                        $median = 11.1;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 10.2);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (12.1 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 85.0) {
                                        $median = 11.2;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 10.3);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (12.3 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 85.5) {
                                        $median = 11.3;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 10.4);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (12.4 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 86.0) {
                                        $median = 11.5;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 10.5);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (12.6 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 86.5) {
                                        $median = 11.6;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 10.6);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (12.7 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 87.0) {
                                        $median = 11.7;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 10.7);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (12.8 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 87.5) {
                                        $median = 11.8;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 10.9);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (13.0 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 88.0) {
                                        $median = 12.0;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 11.0);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (13.1 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 88.5) {
                                        $median = 12.1;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 11.1);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (13.2 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 89.0) {
                                        $median = 12.2;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 11.2);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (13.4 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 89.5) {
                                        $median = 12.3;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 11.3);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (13.5 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 90.0) {
                                        $median = 12.5;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 11.4);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (13.7 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 90.5) {
                                        $median = 12.6;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 11.5);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (13.8 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 91.0) {
                                        $median = 12.7;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 11.7);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (13.9 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 91.5) {
                                        $median = 12.8;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 11.8);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (14.1 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 92.0) {
                                        $median = 13.0;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 11.9);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (14.2 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 92.5) {
                                        $median = 13.1;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 12.0);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (14.3 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 93.0) {
                                        $median = 13.2;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 12.1);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (14.5 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 93.5) {
                                        $median = 13.3;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 12.2);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (14.6 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 94.0) {
                                        $median = 13.5;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 12.3);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (14.7 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 94.5) {
                                        $median = 13.6;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 12.4);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (14.9 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 95.0) {
                                        $median = 13.7;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 12.6);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (15.0 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 95.5) {
                                        $median = 13.8;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 12.7);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (15.2 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 96.0) {
                                        $median = 14.0;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 12.8);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (15.3 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 96.5) {
                                        $median = 14.1;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 12.9);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (15.4 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 97.0) {
                                        $median = 14.2;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 13.0);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (15.6 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 97.5) {
                                        $median = 14.4;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 13.1);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (15.7 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 98.0) {
                                        $median = 14.5;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 13.3);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (15.9 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 98.5) {
                                        $median = 14.6;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 13.4);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (16.0 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 99.0) {
                                        $median = 14.8;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 13.5);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (16.2 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 99.5) {
                                        $median = 14.9;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 13.6);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (16.3 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 100.0) {
                                        $median = 15.0;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 13.7);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (16.5 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 100.5) {
                                        $median = 15.2;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 13.9);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (16.6 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 101.0) {
                                        $median = 15.3;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 14.0);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (16.8 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 101.5) {
                                        $median = 15.5;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 14.1);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (17.0 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 102.0) {
                                        $median = 15.6;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 14.3);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (17.1 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 102.5) {
                                        $median = 15.8;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 14.4);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (17.3 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 103.0) {
                                        $median = 15.9;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 14.5);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (17.5 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 103.5) {
                                        $median = 16.1;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 14.7);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (17.6 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 104.0) {
                                        $median = 16.2;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 14.8);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (17.8 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 104.5) {
                                        $median = 16.4;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 15.0);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (18.0 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 105.0) {
                                        $median = 16.5;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 15.1);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (18.2 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 105.5) {
                                        $median = 16.7;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 15.3);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (18.4 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 106.0) {
                                        $median = 16.9;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 15.4);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (18.5 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 106.5) {
                                        $median = 17.1;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 15.6);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (18.7 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 107.0) {
                                        $median = 17.2;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 15.7);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (18.9 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 107.5) {
                                        $median = 17.4;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 15.9);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (19.1 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 108.0) {
                                        $median = 17.6;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 16.0);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (19.3 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 108.5) {
                                        $median = 17.8;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 16.2);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (19.5 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 109.0) {
                                        $median = 18.0;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 16.4);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (19.7 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 109.5) {
                                        $median = 18.1;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 16.5);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (20.0 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 110.0) {
                                        $median = 18.3;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 16.7);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (20.2 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    }
                                } else if ($balita['umur'] >= 24) {
                                    if ($balita['tinggi'] == 65.0) {
                                        $median = 7.2;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 6.6);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (7.9 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 65.5) {
                                        $median = 7.4;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 6.7);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (8.1 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 66.0) {
                                        $median = 7.5;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 6.8);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (8.2 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 66.5) {
                                        $median = 7.6;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 6.9);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (8.3 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 67.0) {
                                        $median = 7.7;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 7.0);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (8.4 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 67.5) {
                                        $median = 7.8;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 7.1);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (8.5 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 68.0) {
                                        $median = 7.9;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 7.2);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (8.7 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 68.5) {
                                        $median = 8.0;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 7.3);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (8.8 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 69.0) {
                                        $median = 8.1;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 7.4);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (8.9 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 69.5) {
                                        $median = 8.2;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 7.5);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (9.0 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 70.0) {
                                        $median = 8.3;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 7.6);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (9.1 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 70.5) {
                                        $median = 8.4;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 7.7);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (9.2 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 71.0) {
                                        $median = 8.5;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 7.8);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (9.3 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 71.5) {
                                        $median = 8.6;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 7.9);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (9.4 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 72.0) {
                                        $median = 8.7;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 8.0);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (9.5 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 72.5) {
                                        $median = 8.8;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 8.1);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (9.7 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 73.0) {
                                        $median = 8.9;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 8.1);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (9.8 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 73.5) {
                                        $median = 9.0;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 8.2);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (9.9 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 74.0) {
                                        $median = 9.1;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 8.3);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (10.0 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 74.5) {
                                        $median = 9.2;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 8.4);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (10.1 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 75.0) {
                                        $median = 9.3;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 8.5);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (10.2 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 75.5) {
                                        $median = 9.4;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 8.6);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (10.3 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 76.0) {
                                        $median = 9.5;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 8.7);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (10.4 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 76.5) {
                                        $median = 9.6;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 8.7);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (10.5 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 77.0) {
                                        $median = 9.6;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 8.8);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (10.6 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 77.5) {
                                        $median = 9.7;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 8.9);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (10.7 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 78.0) {
                                        $median = 9.8;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 9.0);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (10.8 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 78.5) {
                                        $median = 9.9;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 9.1);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (10.9 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 79.0) {
                                        $median = 10.0;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 9.2);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (11.0 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 79.5) {
                                        $median = 10.1;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 9.3);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (11.1 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 80.0) {
                                        $median = 10.2;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 9.4);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (11.2 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 80.5) {
                                        $median = 10.3;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 9.5);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (11.3 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 81.0) {
                                        $median = 10.4;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 9.6);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (11.4 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 81.5) {
                                        $median = 10.6;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 9.7);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (11.6 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 82.0) {
                                        $median = 10.7;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 9.8);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (11.7 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 82.5) {
                                        $median = 10.8;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 9.9);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (11.8 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 83.0) {
                                        $median = 10.9;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 10.0);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (11.9 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 83.5) {
                                        $median = 11.0;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 10.1);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (12.1 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 84.0) {
                                        $median = 11.1;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 10.2);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (12.2 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 84.5) {
                                        $median = 11.3;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 10.3);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (12.3 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 85.0) {
                                        $median = 11.4;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 10.4);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (12.5 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 85.5) {
                                        $median = 11.5;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 10.6);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (12.6 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 85.5) {
                                        $median = 11.5;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 10.6);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (12.6 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 86.0) {
                                        $median = 11.6;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 10.7);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (12.7 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 86.5) {
                                        $median = 11.8;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 10.8);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (12.9 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 87.0) {
                                        $median = 11.9;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 10.9);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (13.0 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 87.5) {
                                        $median = 12.0;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 11.0);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (13.2 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 88.0) {
                                        $median = 12.1;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 11.1);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (13.3 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 88.5) {
                                        $median = 12.3;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 11.2);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (13.4 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 88.5) {
                                        $median = 12.3;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 11.2);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (13.4 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 89.0) {
                                        $median = 12.4;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 11.4);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (13.6 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 89.5) {
                                        $median = 12.5;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 11.5);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (13.7 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 90.0) {
                                        $median = 12.6;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 11.6);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (13.8 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 90.5) {
                                        $median = 12.8;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 11.7);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (14.0 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 91.0) {
                                        $median = 12.9;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 11.8);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (14.1 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 91.5) {
                                        $median = 13.0;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 11.9);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (14.3 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 92.0) {
                                        $median = 13.1;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 12.0);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (14.4 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 92.5) {
                                        $median = 13.3;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 12.1);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (14.5 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 93.0) {
                                        $median = 13.4;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 12.3);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (14.7 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 93.5) {
                                        $median = 13.5;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 12.4);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (14.8 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 94.0) {
                                        $median = 13.6;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 12.5);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (14.9 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 94.5) {
                                        $median = 13.8;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 12.6);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (15.1 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 95.0) {
                                        $median = 13.9;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 12.7);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (15.2 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 95.5) {
                                        $median = 14.0;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 12.8);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (15.4 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 96.0) {
                                        $median = 14.1;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 12.9);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (15.5 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 96.5) {
                                        $median = 14.3;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 13.1);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (15.6 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 97.0) {
                                        $median = 14.4;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 13.2);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (15.8 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 97.5) {
                                        $median = 14.5;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 13.3);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (15.9 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 98.0) {
                                        $median = 14.7;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 13.4);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (16.1 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 98.5) {
                                        $median = 14.8;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 13.5);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (16.2 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 99.0) {
                                        $median = 14.9;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 13.7);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (16.4 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 99.5) {
                                        $median = 15.1;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 13.8);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (16.5 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 100.0) {
                                        $median = 15.2;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 13.9);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (16.7 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 100.5) {
                                        $median = 15.4;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 14.1);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (16.9 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 101.0) {
                                        $median = 15.5;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 14.2);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (17.0 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 101.5) {
                                        $median = 15.7;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 14.3);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (17.2 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 102.0) {
                                        $median = 15.8;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 14.5);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (17.4 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 102.5) {
                                        $median = 16.0;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 14.6);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (17.5 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 103.0) {
                                        $median = 16.1;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 14.7);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (17.7 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 103.5) {
                                        $median = 16.3;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 14.9);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (17.9 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 104.0) {
                                        $median = 16.4;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 15.0);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (18.1 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 104.5) {
                                        $median = 16.6;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 15.2);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (18.2 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 105.0) {
                                        $median = 16.8;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 15.3);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (18.4 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 105.5) {
                                        $median = 16.9;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 15.5);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (18.6 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 106.0) {
                                        $median = 17.1;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 15.6);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (18.8 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 106.0) {
                                        $median = 17.3;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 15.8);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (19.0 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 106.5) {
                                        $median = 17.3;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 15.8);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (19.0 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 107.0) {
                                        $median = 17.5;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 15.9);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (19.2 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 107.5) {
                                        $median = 17.7;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 16.1);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (19.4 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 108.0) {
                                        $median = 17.8;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 16.3);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (19.6 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 108.5) {
                                        $median = 18.0;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 16.4);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (19.8 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 109.0) {
                                        $median = 18.2;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 16.6);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (20.0 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 109.5) {
                                        $median = 18.4;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 16.8);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (20.3 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 110.0) {
                                        $median = 18.6;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 17.0);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (20.5 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 110.5) {
                                        $median = 18.8;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 17.1);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (20.7 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 111.0) {
                                        $median = 19.0;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 17.3);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (20.9 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 111.5) {
                                        $median = 19.2;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 17.5);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (21.2 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 112.0) {
                                        $median = 19.4;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 17.7);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (21.4 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 112.5) {
                                        $median = 19.6;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 17.9);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (21.6 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 113.0) {
                                        $median = 19.8;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 18.0);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (21.8 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 113.5) {
                                        $median = 20.0;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 18.2);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (22.1 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 114.0) {
                                        $median = 20.2;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 18.4);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (22.3 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 114.5) {
                                        $median = 20.5;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 18.6);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (22.6 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 115.0) {
                                        $median = 20.7;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 18.8);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (22.8 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 115.5) {
                                        $median = 20.9;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 19.0);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (23.0 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 116.0) {
                                        $median = 21.1;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 19.2);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (23.3 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 116.5) {
                                        $median = 21.3;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 19.4);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (23.5 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 117.0) {
                                        $median = 21.5;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 19.6);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (23.8 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 117.5) {
                                        $median = 21.7;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 19.8);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (24.0 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 118.0) {
                                        $median = 22.0;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 19.9);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (24.2 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 118.5) {
                                        $median = 22.2;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 20.1);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (24.5 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 119.0) {
                                        $median = 22.4;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 20.3);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (24.7 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 119.5) {
                                        $median = 22.6;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 20.5);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (25.0 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    } else if ($balita['tinggi'] == 120.0) {
                                        $median = 22.8;
                                        if ($balita['berat'] < $median) {
                                            $zbbtb = ($balita['berat'] - $median) / ($median - 20.7);
                                            echo "<td> $zbbtb </td>";
                                        } else {
                                            $zbbtb = ($balita['berat'] - $median) / (25.2 - $median);
                                            echo "<td>$zbbtb </td>";
                                        }
                                    }
                                } else {
                                    echo "<td>data tidak ditemukan</td>";
                                }
                            }
                            // akhir bb/tb cowo n cewe
                            ?>


                        </tr>


                    <?php } ?>

                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-info">Tampilan data perhitungan matriks</h6>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <h5>Data Balita</h5>

            <table class="table table-bordered multi-table" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>Nama Balita</th>
                        <th>Jenis Kelamin</th>
                        <th>Kategori BB/U</th>
                        <th>Kategori TB/U</th>
                        <th>Kategori BB/TB</th>
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
                            <td> <?= $balita['jenis_kelamin'] ?></td>
                            <?php
                            include 'bb_u.php';
                            // pengkondisian bb/u
                            if ($zscore < (-3)) {
                                $labelbbu = "Berat Badan Sangat Kurang";
                                echo "<td>$labelbbu</td>";
                            } elseif ((-3) <= $zscore && $zscore < (-2)) {
                                $labelbbu = "Berat Badan Kurang";
                                echo "<td>$labelbbu</td>";
                            } elseif ((-2) <= $zscore && $zscore < 1) {
                                $labelbbu = "Berat Badan Normal";
                                echo "<td>$labelbbu</td>";
                            } else if ($zscore > 1) {
                                $labelbbu = "Risiko Berat Badan Lebih";
                                echo "<td>$labelbbu</td>";
                            } else {
                            }



                            ?>

                            <?php
                            include 'tb_u.php';
                            ?>
                            <!-- pengkondisian tb/u -->
                            <?php
                            if ($zscoretb < (-3)) {
                                echo "<td>Sangat Pendek</td>";
                            } else if ((-3) <= $zscoretb && $zscoretb < (-2)) {
                                echo "<td>Pendek</td>";
                            } else if ((-2) <= $zscoretb && $zscoretb < 3) {
                                echo "<td>Normal</td>";
                            } else if ($zscore > 3) {
                                echo "<td>Tinggi</td>";
                            } else {
                                echo "<td>tidak ada kategori</td>";
                            }
                            ?>
                            <!-- awal bb/tb cowo -->
                            <?php
                            include 'bb_tb.php';
                            // akhir bb/tb cowo n cewe
                            ?>

                            <!-- pengkondisian bb/tb -->
                            <?php
                            if ($zbbtb < (-3)) {
                                echo "<td>Gizi Buruk</td>";
                            } else if ((-3) <= $zbbtb && $zbbtb < (-2)) {
                                echo "<td>Gizi Kurang</td>";
                            } else if ((-2) <= $zbbtb && $zbbtb < 1) {
                                echo "<td>Gizi Baik (Normal)</td>";
                            } else if ($zbbtb > 1 && $zbbtb <= 2) {
                                echo "<td>Berisiko Gizi Lebih</td>";
                            } else if ($zbbtb > 2 && $zbbtb <= 3) {
                                echo "<td>Gizi Lebih</td>";
                            } else if ($zbbtb > 3) {
                                echo "<td>Obesitas</td>";
                            } else {
                                echo "<td>tidak ada kategori</td>";
                            }
                            ?>
                        </tr>

                    <?php } ?>

                </tbody>

            </table>
        </div>
    </div>
</div>





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