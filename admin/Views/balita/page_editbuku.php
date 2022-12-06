<!-- Page PRODUK -->
<h1 class="h3 mb-2 text-gray-800">Edit Produk</h1>
<p class="mb-4"> Edit data Buku yang ada pada website<a target="_blank" href="../index.php" target="_blank">PERPUSTAKAAN KOTA Yogyakarta</a>.</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Buku</h6>
    </div>
    <?php
    if (!isset($_GET['id_buku'])) {
        // kalau tidak ada id di query string
        header('Location: index.php?page=buku');
    }

    //ambil id dari query string
    $id_buku = filter_var($_GET['id_buku'], FILTER_SANITIZE_URL);

    // buat query untuk ambil data dari database
    $data = mysqli_query($connect, "SELECT * FROM tbl_buku WHERE id_buku = $id_buku");

    $awal = 0;
    $no = $awal + 1;

    while ($buku = mysqli_fetch_array($data)) {
    ?>
        <form action="function/func_buku.php" method="POST" enctype="multipart/form-data">
            <div class="card-body">
                <div class="form-group row mb-3">
                    <!-- ID PRODUK -->
                    <input type="text" class="form-control" name="id_buku" value="<?php echo $buku['id_buku']; ?>" hidden>

                    <!-- Judul Buku -->
                    <label for="judul_buku" class="col-sm-2 col-form-label">Judul Buku</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="judul_buku" value="<?php echo $buku['judul_buku']; ?>" required>
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <!-- PENULIS BUKU -->
                    <label for="penulis_buku" class="col-sm-2 col-form-label">Penulis Buku</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="penulis_buku" value="<?php echo $buku['penulis_buku']; ?>" required>
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <!-- Penerbit BUku -->
                    <label for="penerbit_buku" class="col-sm-2 col-form-label">Penerbit Buku</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="penerbit_buku" value="<?php echo $buku['penerbit_buku']; ?>" required>
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <!-- Penerbit BUku -->
                    <label for="kategori_buku" class="col-sm-2 col-form-label">Kategori Buku</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="kategori_buku" value="<?php echo $buku['kategori_buku']; ?>" required>
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <!-- Penerbit BUku -->
                    <label for="bahasa" class="col-sm-2 col-form-label">Bahasa</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="bahasa" value="<?php echo $buku['bahasa']; ?>" required>
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <!-- Penerbit BUku -->
                    <label for="lokasi_buku" class="col-sm-2 col-form-label">Lokasi Buku</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="lokasi_buku" value="<?php echo $buku['lokasi_buku']; ?>" required>
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <!-- deskripsi BUku -->
                    <label for="deskripsi_buku" class="col-sm-2 col-form-label">Deskripsi Buku</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="deskripsi_buku" value="<?php echo $buku['deskripsi_buku']; ?>" required>
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <!-- stok BUku -->
                    <label for="deskripsi_buku" class="col-sm-2 col-form-label">Stok</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="stok" value="<?php echo $buku['stok']; ?>" required>
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <div class="col-sm-10 offset-md-2">
                        <button class="btn btn-info" type="submit" name="editdatabuku">Simpan</button>
                        <a class="btn btn-secondary" href="javascript:history.back()">Kembali</a>
                    </div>
                </div>
            </div>
        </form>
    <?php
    }
    ?>
</div>

<!-- JS TEXT EDITOR -->
<script src="editor/tinymce/tinymce.min.js" referrerpolicy="origin"></script>
<script src="editor/config-texteditor.js" referrerpolicy="origin"> </script>
<!-- END JS TEXT EDITOR -->