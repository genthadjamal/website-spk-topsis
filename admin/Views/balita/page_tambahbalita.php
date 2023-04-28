<!-- Page Buku -->
<h1 class="h3 mb-2 text-gray-800">Tambah Data Balita</h1>
<p class="mb-4"> Tambah data balita yang ada pada website <a target="_blank" href="../index.php" target="_blank">SISTEM PENDUKUNG KEPUTUSAN - PRIORITAS PENENTUAN BALITA STUNTING</a>.</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Balita</h6>
    </div>
    <form action="function/func_balita.php" method="POST" enctype="multipart/form-data">
        <div class="card-body">
            <div class="form-group row mb-3">
                <label for="nama_balita" class="col-sm-2 col-form-label">Nama Balita</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_balita" placeholder="" required>
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="jk" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="jk" placeholder="" required>
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="alamat_balita" class="col-sm-2 col-form-label">Alamat Balita</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="alamat_balita" placeholder="" required>
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="umur" class="col-sm-2 col-form-label">Umur (Bulan)</label>
                <div class="col-sm-10">
                    <input type="text" id="formFile" class="form-control" name="umur" placeholder="" required>
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="tinggi" class="col-sm-2 col-form-label">Tinggi / Panjang Badan (cm)</label>
                <div class="col-sm-10">
                    <input type="text" id="formFile" class="form-control" name="tinggi" placeholder="" required>
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="berat" class="col-sm-2 col-form-label">Berat</label>
                <div class="col-sm-10">
                    <input type="text" id="formFile" class="form-control" name="berat" placeholder="" required>
                </div>
            </div>
            <div class="form-group row mb-3">
                <div class="col-sm-10 offset-md-2">
                    <button class="btn btn-info" type="submit" name="tambahdatabalita">Simpan</button>
                    <a class="btn btn-secondary" href="javascript:history.back()">Kembali</a>
                </div>
            </div>
        </div>
    </form>
</div>
<!-- END MODAL TAMBAH DATA -->

<!-- JS TEXT EDITOR -->
<script src="editor/tinymce/tinymce.min.js" referrerpolicy="origin"></script>
<script src="editor/config-texteditor.js" referrerpolicy="origin"> </script>
<!-- END JS TEXT EDITOR -->