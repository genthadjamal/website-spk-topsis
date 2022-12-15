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
                                }


                                echo "<td>Ini Laki-laki</td>";
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