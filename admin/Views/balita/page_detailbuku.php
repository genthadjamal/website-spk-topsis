<!-- Page PRODUK -->
<h1 class="h3 mb-2 text-gray-800">Detail Buku</h1>
<p class="mb-4"> Detail data Buku yang ada pada website<a class="text-info" target="_blank" href="../index.php" target="_blank"> PERPUSTAKAAN KOTA Yogyakarta</a>.</p>


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-info">Buku</h6>
    </div>
    <?php
    if (!isset($_GET['id_buku'])) {
        // kalau tidak ada id di query string
        header('Location: index.php?page=buku');
    }

    //ambil id dari query string
    $id_buku = filter_var($_GET['id_buku'], FILTER_SANITIZE_URL);

    // buat query untuk ambil data dari database
    $data = mysqli_query($connect, "SELECT * FROM tbl_buku WHERE id_buku=$id_buku");

    $awal = 0;
    $no = $awal + 1;

    while ($buku = mysqli_fetch_array($data)) {
    ?>
        <div class="card-body">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <a class="btn btn-info" href="javascript:history.back()"><i class="bi bi-arrow-left-square-fill"> Kembali</i></a>
            </div>
            <div class="form-group row mb-3">
                <label for="id_buku" class="col-sm-2 col-form-label">ID Buku</label>
                <div class="col-sm-10">
                    <!-- : <//?php echo $produk['id_produk'];?> -->
                    <input type="text" class="form-control" name="id_buku" value="<?php echo $buku['id_buku']; ?>" readonly>
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="judul_buku" class="col-sm-2 col-form-label">Judul Buku</label>
                <div class="col-sm-10">
                    <!-- : <//?php echo $produk['nama_produk'];?> -->
                    <input type="text" class="form-control" name="judul_buku" value="<?php echo $buku['judul_buku']; ?>" readonly>
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="penulis_buku" class="col-sm-2 col-form-label">Penulis Buku</label>
                <div class="col-sm-10">
                    <!-- : <//?php echo $produk['kategori'];?> -->
                    <input type="text" class="form-control" name="penulis_buku" value="<?php echo $buku['penulis_buku']; ?>" readonly>
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="penerbit_buku" class="col-sm-2 col-form-label">Penerbit Buku</label>
                <div class="col-sm-10">
                    <!-- : <//?php echo $produk['kategori'];?> -->
                    <input type="text" class="form-control" name="penerbit_buku" value="<?php echo $buku['penerbit_buku']; ?>" readonly>
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="kategori_buku" class="col-sm-2 col-form-label">Kategori Buku</label>
                <div class="col-sm-10">
                    <!-- : <//?php echo $produk['kategori'];?> -->
                    <input type="text" class="form-control" name="kategori_buku" value="<?php echo $buku['kategori_buku']; ?>" readonly>
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="bahasa" class="col-sm-2 col-form-label">Bahasa</label>
                <div class="col-sm-10">
                    <!-- : <//?php echo $produk['kategori'];?> -->
                    <input type="text" class="form-control" name="bahasa" value="<?php echo $buku['bahasa']; ?>" readonly>
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="lokasi_buku" class="col-sm-2 col-form-label">Lokasi Buku</label>
                <div class="col-sm-10">
                    <!-- : <//?php echo $produk['kategori'];?> -->
                    <input type="text" class="form-control" name="lokasi_buku" value="<?php echo $buku['lokasi_buku']; ?>" readonly>
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="deskripsi_buku" class="col-sm-2 col-form-label">Deskripsi Buku</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="deskripsi_buku" value="<?php echo $buku['deskripsi_buku']; ?>/m" readonly>
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="coverbuku" class="col-sm-2 col-form-label">Cover Buku</label>
                <div class="col-sm-10">
                    <!-- : </?php echo $produk['foto'];?> -->
                    <input type="text" class="form-control" name="coverbuku" value="<?php echo $buku['coverbuku']; ?>" readonly><br>
                    <img src="foto/<?php echo $buku['coverbuku'] ?>" width="500">
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="penerbit" class="col-sm-2 col-form-label">Dibuat</label>
                <div class="col-sm-10">
                    <!-- : </?php echo $produk['dibuat'];?> -->
                    <input type="text" class="form-control" name="dibuat" value="<?php echo $buku['dibuat']; ?>" readonly>
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="penerbit" class="col-sm-2 col-form-label">Terakhir diubah</label>
                <div class="col-sm-10">
                    <!-- : </?php echo $produk['diubah'];?> -->
                    <input type="text" class="form-control" name="diubah" value="<?php echo $buku['diubah']; ?>" readonly>
                </div>
            </div>
            <!-- <div class="form-group row mb-3">
            <div class="col-sm-10 offset-md-2">
                <a class="btn btn-secondary" href="javascript:history.back()">Kembali</a>
            </div>
        </div> -->
        </div>
        <!-- END MODAL EDIT FOTO -->
    <?php } ?>
</div>
<!-- END MODAL TAMBAH DATA -->