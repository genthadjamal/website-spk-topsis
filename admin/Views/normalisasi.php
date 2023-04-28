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
                            echo "<td>" . $x . "</td>";



                            $q = $balita['bobot_tb'];
                            $a = $q / $total_tbu;
                            $mtk_bobot_tbu = $a * 3;
                            echo "<td>" . $a . "</td>";

                            $r = $balita['bobot_tbbb'];
                            $b = $r / $total_tbbb;
                            echo "<td>" . $b . "</td>";
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
                            echo "<td>" . $mtk_bobot_bbu . "</td>";



                            $q = $balita['bobot_tb'];
                            $a = $q / $total_tbu;
                            $mtk_bobot_tbu = $a * 3;
                            echo "<td>" . $mtk_bobot_tbu . "</td>";

                            $r = $balita['bobot_tbbb'];
                            $b = $r / $total_tbbb;
                            $mtk_bobot_tbbb = $b * 2;
                            echo "<td>" . $mtk_bobot_tbbb . "</td>";
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
                        echo "<td>" . $max_value_bb . "</td>";

                        $result = mysqli_query($connect, "SELECT MAX(mtk_bobot_tbu) AS max_value_tb FROM tbl_balita");
                        $row = mysqli_fetch_array($result);
                        $max_value_tb = $row['max_value_tb'];
                        echo "<td>" . $max_value_tb . "</td>";

                        $result = mysqli_query($connect, "SELECT MAX(mtk_bobot_tbbb) AS max_value_tbbb FROM tbl_balita");
                        $row = mysqli_fetch_array($result);
                        $max_value_tbbb = $row['max_value_tbbb'];
                        echo "<td>" . $max_value_tbbb . "</td>";
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
                        echo "<td>" . $min_value_bb . "</td>";

                        $result = mysqli_query($connect, "SELECT MIN(mtk_bobot_tbu) AS min_value_tb FROM tbl_balita");
                        $row = mysqli_fetch_array($result);
                        $min_value_tb = $row['min_value_tb'];
                        echo "<td>" . $min_value_tb . "</td>";

                        $result = mysqli_query($connect, "SELECT MIN(mtk_bobot_tbbb) AS min_value_tbbb FROM tbl_balita");
                        $row = mysqli_fetch_array($result);
                        $min_value_tbbb = $row['min_value_tbbb'];
                        echo "<td>" . $min_value_tbbb . "</td>";
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

                        echo "<td>" . $akar_all . "</td>";


                        $kurang_bb2 =  $balita['mtk_bobot_bbu'] - $min_value_bb;
                        $kurang_tb2 =  $balita['mtk_bobot_tbu'] - $min_value_tb;
                        $kurang_tbbb2 = $balita['mtk_bobot_tbbb'] - $min_value_tbbb;

                        $pangkat_bb2 = pow($kurang_bb2, 2);
                        $pangkat_tb2 = pow($kurang_tb2, 2);
                        $pangkat_tbbb2 = pow($kurang_tbbb2, 2);

                        $jumlah_all2 = $pangkat_bb2 + $pangkat_tb2 + $pangkat_tbbb2;
                        $akar_all2 = sqrt($jumlah_all2);

                        echo "<td>" . $akar_all2 . "</td>";

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




<!-- nilai prefernsi -->

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
                            echo "<td>" . $prefensi . "</td>";
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