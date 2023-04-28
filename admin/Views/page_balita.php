<!-- Page Buku -->
<h1 class="h3 mb-2 text-gray-800">Data Balita</h1>
<p class="mb-4"> Menampilkan data Balita yang ada pada website<a class="text-info" target="_blank" href="../index.php" target="_blank"> SISTEM PENDUKUNG KEPUTUSAN - PRIORITAS PENENTUAN BALITA STUNTING</a>.</p>


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-info">List Balita</h6>
    </div>

    <div class="card-body">

        <!-- TOMBOL TAMBAH -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <a class="btn btn-info" type="button" href="index.php?page=tambahbalita"><i class="fas fa-fw fa-plus"></i> Tambah Data Balita </a>
            <!-- <a href="cetak_pdf/cetak_produk.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-download fa-sm text-white-50"></i> Cetak Data</a> -->
        </div>
        <!-- <a href="cetak_produk.php"> <button class="btn btn-primary" type="button" href="#"> Cetak Data </button> </a> <br><br> -->

        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>Nama Balita</th>
                        <th>Alamat Balita</th>
                        <th>Jenis Kelamin</th>
                        <th>Umur</th>
                        <th>Tinggi</th>
                        <th>Berat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $data = mysqli_query($connect, "SELECT * FROM tbl_balita");
                    $awal = 0;
                    $no = $awal + 1;
                    while ($balita = mysqli_fetch_array($data)) {
                    ?>
                        <tr>
                            <td> <?= $no++ ?></td>
                            <td> <?= $balita['nama_balita'] ?></td>
                            <td> <?= $balita['alamat_balita'] ?></td>
                            <td><?= $balita['jenis_kelamin'] ?></td>
                            <td> <?= $balita['umur'] ?></td>
                            <td><?= $balita['tinggi']; ?></td>
                            <td><?= $balita['berat']; ?></td>
                            <td>
                                <a class="btn btn-warning" href="index.php?page=editbalita&id_balita=<?= $balita['id_balita']; ?>"><i class="bi bi-pencil-fill"></i></a>
                                <a class="btn btn-danger flash-hapus" href="function/hapus_balita.php?id_balita=<?= $balita['id_balita']; ?>"><i class="bi bi-trash"></i></a>
                            </td>

                        </tr>
                    <?php } ?>

                </tbody>
            </table>
        </div>
    </div>
</div>

<p>
    <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
        Detail Perhitungan TOPSIS
    </a>
</p>
<div class="collapse" id="collapseExample">
    <!-- data bobot kriteria -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-info">List Balita</h6>
        </div>

        <div class="card-body">
            <!-- TOMBOL TAMBAH -->

            <!-- <a href="cetak_produk.php"> <button class="btn btn-primary" type="button" href="#"> Cetak Data </button> </a> <br><br> -->

            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>Nama Balita</th>
                            <th>Bobot BB/U</th>
                            <th>Bobot TB/U</th>
                            <th>Bobot BB/TB</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $data = mysqli_query($connect, "SELECT * FROM tbl_balita");
                        $awal = 0;
                        $no = $awal + 1;
                        while ($balita = mysqli_fetch_array($data)) {
                        ?>
                            <tr>
                                <td> <?= $no++ ?></td>
                                <td> <?= $balita['nama_balita'] ?></td>
                                <?php
                                include 'bb_u.php';
                                // bobot bb/u


                                if ($zscore < (-3)) {
                                    $id_balita = $balita['id_balita'];
                                    $bobot_bb = 1;
                                    $sql_edit = "UPDATE tbl_balita SET bobot_bbu = '$bobot_bb'
                                WHERE id_balita = '$id_balita' ";
                                    mysqli_query($connect, $sql_edit);
                                    echo "<td>" . $balita['bobot_bbu'] . "</td>";
                                } elseif ((-3) <= $zscore && $zscore < (-2)) {
                                    $id_balita = $balita['id_balita'];
                                    $bobot_bb = 2;
                                    $sql_edit = "UPDATE tbl_balita SET bobot_bbu = '$bobot_bb'
                                WHERE id_balita = '$id_balita' ";
                                    mysqli_query($connect, $sql_edit);
                                    echo "<td>" . $balita['bobot_bbu'] . "</td>";
                                } elseif ((-2) <= $zscore && $zscore < 1) {
                                    $id_balita = $balita['id_balita'];
                                    $bobot_bb = 3;
                                    $sql_edit = "UPDATE tbl_balita SET bobot_bbu = '$bobot_bb'
                                WHERE id_balita = '$id_balita' ";
                                    mysqli_query($connect, $sql_edit);
                                    echo "<td>" . $balita['bobot_bbu'] . "</td>";
                                } else if ($zscore > 1) {
                                    $id_balita = $balita['id_balita'];
                                    $bobot_bb = 4;
                                    $sql_edit = "UPDATE tbl_balita SET bobot_bbu = '$bobot_bb'
                                WHERE id_balita = '$id_balita' ";
                                    mysqli_query($connect, $sql_edit);
                                    echo "<td>" . $balita['bobot_bbu'] . "</td>";
                                } else {
                                }

                                ?>
                                <?php
                                include 'tb_u.php';
                                if ($zscoretb < (-3)) {
                                    $id_balita = $balita['id_balita'];
                                    $bobot_tb = 1;
                                    $sql_edit = "UPDATE tbl_balita SET bobot_tb = '$bobot_tb'
                                WHERE id_balita = '$id_balita' ";
                                    mysqli_query($connect, $sql_edit);
                                    echo "<td>" . $balita['bobot_tb'] . "</td>";
                                } else if ((-3) <= $zscoretb && $zscoretb < (-2)) {
                                    $id_balita = $balita['id_balita'];
                                    $bobot_tb = 2;
                                    $sql_edit = "UPDATE tbl_balita SET bobot_tb = '$bobot_tb'
                                WHERE id_balita = '$id_balita' ";
                                    mysqli_query($connect, $sql_edit);
                                    echo "<td>" . $balita['bobot_tb'] . "</td>";
                                } else if ((-2) <= $zscoretb && $zscoretb < 3) {
                                    $id_balita = $balita['id_balita'];
                                    $bobot_tb = 3;
                                    $sql_edit = "UPDATE tbl_balita SET bobot_tb = '$bobot_tb'
                                WHERE id_balita = '$id_balita' ";
                                    mysqli_query($connect, $sql_edit);
                                    echo "<td>" . $balita['bobot_tb'] . "</td>";
                                } else if ($zscore > 3) {
                                    $id_balita = $balita['id_balita'];
                                    $bobot_tb = 4;
                                    $sql_edit = "UPDATE tbl_balita SET bobot_tb = '$bobot_tb'
                                WHERE id_balita = '$id_balita' ";
                                    mysqli_query($connect, $sql_edit);
                                    echo "<td>" . $balita['bobot_tb'] . "</td>";
                                } else {
                                    echo "<td>tidak ada kategori</td>";
                                }
                                ?>


                                <?php
                                include 'bb_tb.php';
                                $id_balita = $balita['id_balita'];
                                if ($zbbtb < (-3)) {
                                    $bobot_tbbb = 1;
                                    $sql_edit = "UPDATE tbl_balita SET bobot_tbbb = '$bobot_tbbb'
                                WHERE id_balita = '$id_balita' ";
                                    mysqli_query($connect, $sql_edit);
                                    echo "<td>" . $balita['bobot_tbbb'] . "</td>";
                                } else if ((-3) <= $zbbtb && $zbbtb < (-2)) {
                                    $bobot_tbbb = 2;
                                    $sql_edit = "UPDATE tbl_balita SET bobot_tbbb = '$bobot_tbbb'
                                WHERE id_balita = '$id_balita' ";
                                    mysqli_query($connect, $sql_edit);
                                    echo "<td>" . $balita['bobot_tbbb'] . "</td>";
                                } else if ((-2) <= $zbbtb && $zbbtb < 1) {
                                    $bobot_tbbb = 3;
                                    $sql_edit = "UPDATE tbl_balita SET bobot_tbbb = '$bobot_tbbb'
                                WHERE id_balita = '$id_balita' ";
                                    mysqli_query($connect, $sql_edit);
                                    echo "<td>" . $balita['bobot_tbbb'] . "</td>";
                                } else if ($zbbtb > 1 && $zbbtb <= 2) {
                                    $bobot_tbbb = 4;
                                    $sql_edit = "UPDATE tbl_balita SET bobot_tbbb = '$bobot_tbbb'
                                WHERE id_balita = '$id_balita' ";
                                    mysqli_query($connect, $sql_edit);
                                    echo "<td>" . $balita['bobot_tbbb'] . "</td>";
                                } else if ($zbbtb > 2 && $zbbtb <= 3) {
                                    $bobot_tbbb = 5;
                                    $sql_edit = "UPDATE tbl_balita SET bobot_tbbb = '$bobot_tbbb'
                                WHERE id_balita = '$id_balita' ";
                                    mysqli_query($connect, $sql_edit);
                                    echo "<td>" . $balita['bobot_tbbb'] . "</td>";
                                } else if ($zbbtb > 3) {
                                    $bobot_tbbb = 6;
                                    $sql_edit = "UPDATE tbl_balita SET bobot_tbbb = '$bobot_tbbb'
                                WHERE id_balita = '$id_balita' ";
                                    mysqli_query($connect, $sql_edit);
                                    echo "<td>" . $balita['bobot_tbbb'] . "</td>";
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
    <!-- normalisasi -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-info">List Balita</h6>
        </div>

        <div class="card-body">
            <!-- TOMBOL TAMBAH -->

            <!-- <a href="cetak_produk.php"> <button class="btn btn-primary" type="button" href="#"> Cetak Data </button> </a> <br><br> -->

            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Balita</th>
                            <th>Normalisasi BB/U</th>
                            <th>Normalisasi TB/U</th>
                            <th>Normalisasi BB/TB</th>

                        </tr>
                    </thead>
                    <?php
                    $data = mysqli_query($connect, "SELECT * FROM tbl_balita");
                    $awal = 0;
                    $no = $awal + 1;
                    $jumlah = 0;
                    $jumlah_tbu = 0;
                    $jumlah_tbbb = 0;
                    while ($balita = mysqli_fetch_array($data)) {
                    ?>
                    <?php
                        $p = $balita['bobot_bbu'];
                        $q = $balita['bobot_tb'];
                        $r = $balita['bobot_tbbb'];
                        $jumlah = $jumlah + ($p * $p);
                        $jumlah_tbu = $jumlah_tbu + ($q * $q);
                        $jumlah_tbbb = $jumlah_tbbb + ($r * $r);
                    }
                    // pembagi
                    $total = sqrt($jumlah);
                    $total_tbu = sqrt($jumlah_tbu);
                    $total_tbbb = sqrt($jumlah_tbbb);
                    // echo $total;


                    ?>
                    <tbody>

                        <?php
                        $data = mysqli_query($connect, "SELECT * FROM tbl_balita");
                        $awal = 0;
                        $no = $awal + 1;
                        while ($balita = mysqli_fetch_array($data)) {
                        ?>
                            <tr>
                                <td> <?= $no++ ?></td>

                                <td> <?= $balita['nama_balita'] ?></td>
                                <?php
                                $id_balita = $balita['id_balita'];
                                $p = $balita['bobot_bbu'];

                                $x = $p / $total;
                                echo "<td>" . number_format($x, 3) . "</td>";



                                $q = $balita['bobot_tb'];
                                $a = $q / $total_tbu;
                                $mtk_bobot_tbu = $a * 3;
                                echo "<td>" . number_format($a, 3)  . "</td>";

                                $r = $balita['bobot_tbbb'];
                                $b = $r / $total_tbbb;
                                echo "<td>" . number_format($b, 3)  . "</td>";
                                ?>

                            </tr>
                        <?php
                        }
                        ?>


                    </tbody>
                </table>
            </div>
        </div>

    </div>
    <!-- normalisasi terbobot -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-info">List Normalisasi terbobot</h6>
        </div>

        <div class="card-body">
            <!-- TOMBOL TAMBAH -->

            <!-- <a href="cetak_produk.php"> <button class="btn btn-primary" type="button" href="#"> Cetak Data </button> </a> <br><br> -->

            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Balita</th>
                            <th>Normalisasi BB/U</th>
                            <th>Normalisasi TB/U</th>
                            <th>Normalisasi BB/TB</th>

                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        $data = mysqli_query($connect, "SELECT * FROM tbl_balita");
                        $awal = 0;
                        $no = $awal + 1;
                        while ($balita = mysqli_fetch_array($data)) {
                        ?>
                            <tr>
                                <td> <?= $no++ ?></td>
                                <td> <?= $balita['nama_balita'] ?></td>
                                <?php
                                $id_balita = $balita['id_balita'];
                                $p = $balita['bobot_bbu'];

                                $x = $p / $total;
                                $mtk_bobot_bbu = $x * 1;
                                echo "<td>" . number_format($mtk_bobot_bbu, 3)  . "</td>";



                                $q = $balita['bobot_tb'];
                                $a = $q / $total_tbu;
                                $mtk_bobot_tbu = $a * 3;
                                echo "<td>" . number_format($mtk_bobot_tbu, 3)  . "</td>";

                                $r = $balita['bobot_tbbb'];
                                $b = $r / $total_tbbb;
                                $mtk_bobot_tbbb = $b * 2;
                                echo "<td>" . number_format($mtk_bobot_tbbb, 3)  . "</td>";
                                ?>

                            </tr>
                        <?php
                        }
                        ?>


                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- nilai ideal positif negatif -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-info">Nilai Ideal Positif dan Nilai Ideal Negatif</h6>
        </div>

        <div class="card-body">
            <!-- TOMBOL TAMBAH -->

            <!-- <a href="cetak_produk.php"> <button class="btn btn-primary" type="button" href="#"> Cetak Data </button> </a> <br><br> -->

            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th colspan="3">MAX </th>
                        </tr>

                    </thead>
                    <tbody>

                        <?php
                        $data = mysqli_query($connect, "SELECT * FROM tbl_balita");
                        $awal = 0;
                        $no = $awal + 1;
                        while ($balita = mysqli_fetch_array($data)) {
                        ?>

                            <!-- <td> <?= $no++ ?></td>
                            <td> <?= $balita['nama_balita'] ?></td> -->
                            <?php
                            $id_balita = $balita['id_balita'];
                            $p = $balita['bobot_bbu'];

                            $x = $p / $total;
                            $mtk_bobot_bbu = $x * 1;
                            $query = "UPDATE tbl_balita SET mtk_bobot_bbu = '$mtk_bobot_bbu' WHERE id_balita = '$id_balita'";
                            mysqli_query($connect, $query);




                            $q = $balita['bobot_tb'];
                            $a = $q / $total_tbu;
                            $mtk_bobot_tbu = $a * 3;
                            $query = "UPDATE tbl_balita SET mtk_bobot_tbu = '$mtk_bobot_tbu' WHERE id_balita = '$id_balita'";
                            mysqli_query($connect, $query);

                            $r = $balita['bobot_tbbb'];
                            $b = $r / $total_tbbb;
                            $mtk_bobot_tbbb = $b * 2;
                            $query = "UPDATE tbl_balita SET mtk_bobot_tbbb = '$mtk_bobot_tbbb' WHERE id_balita = '$id_balita'";
                            mysqli_query($connect, $query);
                            ?>


                        <?php
                        }
                        ?>
                        <tr>

                            <?php
                            $result = mysqli_query($connect, "SELECT MAX(mtk_bobot_bbu) AS max_value_bb FROM tbl_balita");
                            $row = mysqli_fetch_array($result);
                            $max_value_bb = $row['max_value_bb'];
                            echo "<td>" . number_format($max_value_bb, 3)  . "</td>";

                            $result = mysqli_query($connect, "SELECT MAX(mtk_bobot_tbu) AS max_value_tb FROM tbl_balita");
                            $row = mysqli_fetch_array($result);
                            $max_value_tb = $row['max_value_tb'];
                            echo "<td>" . number_format($max_value_tb, 3)  . "</td>";

                            $result = mysqli_query($connect, "SELECT MAX(mtk_bobot_tbbb) AS max_value_tbbb FROM tbl_balita");
                            $row = mysqli_fetch_array($result);
                            $max_value_tbbb = $row['max_value_tbbb'];
                            echo "<td>" . number_format($max_value_tbbb, 3)  . "</td>";
                            ?>
                        </tr>
                        <tr>
                            <th colspan="3">MIN</th>
                        </tr>
                        <tr>
                            <?php
                            $result = mysqli_query($connect, "SELECT MIN(mtk_bobot_bbu) AS min_value_bb FROM tbl_balita");
                            $row = mysqli_fetch_array($result);
                            $min_value_bb = $row['min_value_bb'];
                            echo "<td>" . number_format($min_value_bb, 3)  . "</td>";

                            $result = mysqli_query($connect, "SELECT MIN(mtk_bobot_tbu) AS min_value_tb FROM tbl_balita");
                            $row = mysqli_fetch_array($result);
                            $min_value_tb = $row['min_value_tb'];
                            echo "<td>" . number_format($min_value_tb, 3)  . "</td>";

                            $result = mysqli_query($connect, "SELECT MIN(mtk_bobot_tbbb) AS min_value_tbbb FROM tbl_balita");
                            $row = mysqli_fetch_array($result);
                            $min_value_tbbb = $row['min_value_tbbb'];
                            echo "<td>" . number_format($min_value_tbbb, 3)  . "</td>";
                            ?>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- langkah jarak ideal positif dan negatif -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-info">Nilai Ideal Positif dan Nilai Ideal Negatif</h6>
        </div>

        <div class="card-body">
            <!-- TOMBOL TAMBAH -->

            <!-- <a href="cetak_produk.php"> <button class="btn btn-primary" type="button" href="#"> Cetak Data </button> </a> <br><br> -->

            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Balita</th>
                            <th>D+</th>
                            <th>D-</th>
                        </tr>

                    </thead>
                    <tbody>

                        <?php
                        $data = mysqli_query($connect, "SELECT * FROM tbl_balita");
                        $awal = 0;
                        $no = $awal + 1;
                        $jumlah_bb = 0;
                        while ($balita = mysqli_fetch_array($data)) {
                        ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $balita['nama_balita']; ?></td>
                            <?php
                            $id_balita = $balita['id_balita'];
                            $kurang_bb = $max_value_bb - $balita['mtk_bobot_bbu'];
                            $kurang_tb =  $max_value_tb - $balita['mtk_bobot_tbu'];
                            $kurang_tbbb = $max_value_tbbb - $balita['mtk_bobot_tbbb'];

                            $pangkat_bb = pow($kurang_bb, 2);
                            $pangkat_tb = pow($kurang_tb, 2);
                            $pangkat_tbbb = pow($kurang_tbbb, 2);

                            $jumlah_all = $pangkat_bb + $pangkat_tb + $pangkat_tbbb;
                            $akar_all = sqrt($jumlah_all);

                            echo "<td>" . number_format($akar_all, 3)  . "</td>";


                            $kurang_bb2 =  $balita['mtk_bobot_bbu'] - $min_value_bb;
                            $kurang_tb2 =  $balita['mtk_bobot_tbu'] - $min_value_tb;
                            $kurang_tbbb2 = $balita['mtk_bobot_tbbb'] - $min_value_tbbb;

                            $pangkat_bb2 = pow($kurang_bb2, 2);
                            $pangkat_tb2 = pow($kurang_tb2, 2);
                            $pangkat_tbbb2 = pow($kurang_tbbb2, 2);

                            $jumlah_all2 = $pangkat_bb2 + $pangkat_tb2 + $pangkat_tbbb2;
                            $akar_all2 = sqrt($jumlah_all2);

                            echo "<td>" . number_format($akar_all2, 3)  . "</td>";

                            $query = "UPDATE tbl_balita SET d_plus = '$akar_all', d_min = '$akar_all2' WHERE id_balita = '$id_balita'";
                            mysqli_query($connect, $query);
                        }
                            ?>
                            </tr>

                    </tbody>
                </table>


            </div>
        </div>
    </div>
    <!-- nilai preferensi -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-info">Nilai Preferensi</h6>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Balita</th>
                            <th>Nilai Preferensi</th>
                        </tr>

                    </thead>
                    <tbody>
                        <?php
                        $data = mysqli_query($connect, "SELECT * FROM tbl_balita");
                        $awal = 0;
                        $no = $awal + 1;
                        while ($balita = mysqli_fetch_array($data)) {
                            $id_balita = $balita['id_balita'];
                        ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $balita['nama_balita']; ?></td>
                                <?php
                                $prefensi = $balita['d_min'] / ($balita['d_min'] + $balita['d_plus']);
                                echo "<td>" . number_format($prefensi, 3)  . "</td>";
                                $query = "UPDATE tbl_balita SET preferensi = '$prefensi' WHERE id_balita = '$id_balita'";
                                mysqli_query($connect, $query);
                                ?>
                            </tr>
                        <?php
                        }
                        ?>


                    </tbody>
                </table>


            </div>
        </div>
    </div>
    <!-- perankingan -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-info">Perankingan Prioritas Balita Stunting</h6>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Balita</th>
                            <th>Nilai Preferensi</th>
                        </tr>

                    </thead>
                    <tbody>
                        <?php
                        $data = mysqli_query($connect, "SELECT * FROM tbl_balita ORDER BY preferensi ASC");
                        $awal = 0;
                        $no = $awal + 1;
                        while ($balita = mysqli_fetch_array($data)) {
                            $id_balita = $balita['id_balita'];
                        ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $balita['nama_balita']; ?></td>
                                <td><?= number_format($balita['preferensi'], 3)  ?></td>
                            </tr>
                        <?php
                        }
                        ?>


                    </tbody>
                </table>


            </div>
        </div>
    </div>
</div>



<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-info"></h6>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <?php
            $text = mysqli_query($connect, "SELECT *  FROM `tbl_balita` WHERE preferensi = (SELECT MIN(preferensi) FROM `tbl_balita`)");
            // $preferensi = $query['id_balita'];
            while ($balita = mysqli_fetch_array($text)) {
                echo "<p>Dari Hasil Perhitungan Sistem Pendukung Keputusan dapat disimpulkan bahwa Balita atas Nama <b>" . $balita['nama_balita'] . "</b> dengan Berat " . $balita['berat'] . " Kg ,Tinggi " . $balita['tinggi'] . " cm, dan Umur " . $balita['umur'] . " Bulan, mendapat prioritas untuk penanganan gejala stunting dan nantinya bisa ditangani lebih lanjut oleh seorang yang alhli dibidangnya</p>";
            }
            ?>

        </div>
    </div>
</div>


<!-- SCRIPT -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
<script src="../resource/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
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