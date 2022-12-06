<!-- Page pesanan -->
<h1 class="h3 mb-2 text-gray-800">Data Pinjaman </h1>
<p class="mb-4"> Menampilkan Data Pinjaman yang ada pada website<a class="text-info" target="_blank" href="../index.php" target="_blank"> PERPUSTAKAAN KOTA Yogyakarta</a>.</p>

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
        <h6 class="m-0 font-weight-bold text-info">List Pinjaman</h6>
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
                        <th>Invoice</th>
                        <th>Judul Buku</th>
                        <th>Nama Peminjam</th>
                        <th>No Identitas</th>
                        <th>Tanggal Pinjam</th>
                        <th>Tanggal Kembali</th>
                        <th>Status Peminjaman</th>
                        <th>Status Buku</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $data = mysqli_query($connect, "SELECT * FROM tbl_peminjaman WHERE status_peminjaman = 'Sudah Dikonfirmasi' AND status_buku = 'Belum Diambil'");
                    $no = 1;
                    while ($peminjaman = mysqli_fetch_array($data)) {
                    ?>
                        <tr>
                            <td> <?= $no++ ?></td>
                            <td> <?= $peminjaman['invoice'] ?></td>
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