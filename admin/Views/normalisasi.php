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
                while ($balita = mysqli_fetch_array($data)) {
                ?>
                <?php
                    $p = $balita['bobot_bbu'];

                    $jumlah = $jumlah + ($p * $p);
                }
                // pembagi
                $total = sqrt($jumlah);
                // echo $total;
                while ($balita = mysqli_fetch_array($data)) {
                    $normalisasi = $balita['bobot_bbu'] / $total;
                }

                ?>
                <tbody>

                    <?php
                    $data = mysqli_query($connect, "SELECT * FROM tbl_balita");
                    $awal = 0;
                    $no = $awal + 1;
                    while ($balita = mysqli_fetch_array($data)) {
                    ?>
                        <tr>
                            <td> <?= $balita['nama_balita'] ?></td>
                            <?php
                            $p = $balita['bobot_bbu'];

                            $x = $p / $total;
                            echo "<td>" . $x . "</td>";
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
        <h6 class="m-0 font-weight-bold text-info">List Balita</h6>
    </div>

    <div class="card-body">
        <!-- TOMBOL TAMBAH -->

        <!-- <a href="cetak_produk.php"> <button class="btn btn-primary" type="button" href="#"> Cetak Data </button> </a> <br><br> -->

        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
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
                while ($balita = mysqli_fetch_array($data)) {
                ?>
                <?php
                    $p = $balita['bobot_bbu'];

                    $jumlah = $jumlah + ($p * $p);
                }
                // pembagi
                $total = sqrt($jumlah);
                // echo $total;
                while ($balita = mysqli_fetch_array($data)) {
                    $normalisasi = $balita['bobot_bbu'] / $total;
                }

                ?>
                <tbody>

                    <?php
                    $data = mysqli_query($connect, "SELECT * FROM tbl_balita");
                    $awal = 0;
                    $no = $awal + 1;
                    while ($balita = mysqli_fetch_array($data)) {
                    ?>
                        <tr>
                            <td> <?= $balita['nama_balita'] ?></td>
                            <?php
                            $p = $balita['bobot_bbu'];

                            $x = $p / $total;
                            echo "<td>" . $x . "</td>";
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