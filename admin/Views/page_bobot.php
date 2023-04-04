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
                        <th>id balita</th>
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
                            <td><?= $balita['id_balita']; ?></td>
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