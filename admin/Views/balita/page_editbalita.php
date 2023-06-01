<!-- Page PRODUK -->
<h1 class="h3 mb-2 text-gray-800">Edit Data Balita</h1>
<p class="mb-4"> Edit data Balita yang ada pada website<a target="_blank" href="../index.php" target="_blank"> SISTEM PENDUKUNG KEPUTUSAN - PRIORITAS PENENTUAN BALITA STUNTING</a>.</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Balita</h6>
    </div>
    <?php
    if (!isset($_GET['id_balita'])) {
        // kalau tidak ada id di query string
        header('Location: index.php?page=balita');
    }

    //ambil id dari query string
    $id_balita = filter_var($_GET['id_balita'], FILTER_SANITIZE_URL);

    // buat query untuk ambil data dari database
    $data = mysqli_query($connect, "SELECT * FROM tbl_balita WHERE id_balita = $id_balita");

    $awal = 0;
    $no = $awal + 1;

    while ($balita = mysqli_fetch_array($data)) {
    ?>
        <form action="function/func_balita.php" method="POST" enctype="multipart/form-data">
            <div class="card-body">
                <div class="form-group row mb-3">
                    <!-- id balita -->
                    <input type="text" class="form-control" name="id_balita" value="<?php echo $balita['id_balita']; ?>" hidden>

                    <!-- nama balita -->
                    <label for="nama_balita" class="col-sm-2 col-form-label">Nama Balita</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nama_balita" value="<?php echo $balita['nama_balita']; ?>" required>
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <!-- alamat balita -->
                    <label for="alamat_balita" class="col-sm-2 col-form-label">Alamat Balita</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="alamat_balita" value="<?php echo $balita['alamat_balita']; ?>" required>
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <!-- jenis kelamin -->
                    <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="jenis_kelamin" value="<?php echo $balita['jenis_kelamin']; ?>" required>
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <!-- Penerbit BUku -->
                    <label for="umur" class="col-sm-2 col-form-label">Umur</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="umur" value="<?php echo $balita['umur']; ?>" required>
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <!-- tinggi -->
                    <label for="tinggi" class="col-sm-2 col-form-label">Tinggi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="tinggi" value="<?php echo $balita['tinggi']; ?>" required>
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <!-- berat -->
                    <label for="berat" class="col-sm-2 col-form-label">Berat</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="berat" value="<?php echo $balita['berat']; ?>" required>
                    </div>
                </div>

                <div class="form-group row mb-3">
                    <div class="col-sm-10 offset-md-2">
                        <button class="btn btn-info" type="submit" name="editdatabalita">Simpan</button>
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