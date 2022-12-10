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
                            <td> <?= $balita['umur'] ?></td>
                            <td><?= $balita['tinggi']; ?></td>
                            <td><?= $balita['berat']; ?></td>
                            <td>
                                <a class="btn btn-info" href="index.php?page=detailbuku&id_buku=<?= $balita['id_balita']; ?>"><i class="bi bi-eye-fill"></i></a>
                                <a class="btn btn-success" href="index.php?page=editcover&id_buku=<?= $balita['id_balita']; ?>"><i class="bi bi-image-fill"></i></a>
                                <a class="btn btn-warning" href="index.php?page=editbalita&id_balita=<?= $balita['id_balita']; ?>"><i class="bi bi-pencil-fill"></i></a>
                                <a class="btn btn-danger flash-hapus" href="function/hapus_balita.php?id_balita=<?= $balita['id_balita']; ?>"><i class="bi bi-trash"></i></a>
                            </td>

                        </tr>

                        <!-- MODAL EDIT DATA -->
                        <div class="modal fade" id="editbuku <?php echo $buku['id_buku'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="fw-bolder modal-title" id="exampleModalLabel">Edit Data Buku</h5>
                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="function.php" method="POST" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="form-group col-md-12">
                                                    <label for="tambahbuku">Judul Buku</label>
                                                    <input type="text" class="form-control" name="judul_buku" placeholder="" value="<?php echo $buku['judul_buku']; ?>">
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label for="tambahpenulis">Penulis Buku</label>
                                                    <input type="text" class="form-control" name="penulis_buku" placeholder="" value="<?php echo $buku['penulis_buku']; ?>">
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label for="tambahpenerbit">Penerbit Buku</label>
                                                    <input type="text" class="form-control" name="penerbit_buku" placeholder="" value="<?php echo $buku['penerbit_buku']; ?>">
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label for="tambahdeskripsi">Deskripsi Buku</label>
                                                    <input type="text" class="form-control" name="deskripsi_buku" placeholder="" value="<?php echo $buku['deskripsi_buku']; ?>">
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label for="tambahstok">Stok</label>
                                                    <input type="text" class="form-control" name="stok" placeholder="" value="<?php echo $buku['stok']; ?>">
                                                </div>
                                            </div>

                                            <div class="modal-footer">
                                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                                <button type="submit" name="editdatabuku" class="btn btn-primary">Simpan</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END MODAL EDIT DATA -->

                        <!-- MODAL EDIT FOTO -->
                        <div class="modal fade" id="editcoverbuku<?php echo $buku['id_buku'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="fw-bolder modal-title" id="exampleModalLabel">Edit Cover Buku</h5>
                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="function/func_buku.php" method="POST" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <!-- <label for="tambahid">ID produk</label> -->
                                                    <input type="text" class="form-control" name="id_buku" placeholder="" value="<?php echo $buku['id_buku']; ?>" hidden>
                                                </div>
                                                <div class="form-group col-md-12 mb-0">
                                                    <center><img src="foto/<?php echo $buku['coverbuku'] ?>" width="400"><br><br></center>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label for="">Cover Buku</label>
                                                    <input type="text" class="form-control" name="coverbuku" value="<?php echo $buku['coverbuku']; ?>" readonly>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <input type="file" class="form-control" name="coverbuku" placeholder="" value="<?php echo $buku['coverbuku']; ?>">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                                <button type="submit" name="editfoto" class="btn btn-info">Simpan</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END MODAL EDIT FOTO -->
                    <?php } ?>

                </tbody>
            </table>
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