<!-- Page PRODUK -->
<h1 class="h3 mb-2 text-gray-800">Edit Cover Buku</h1>

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
                    <input type="text" class="form-control" name="id_buku" placeholder="" value="<?php echo $buku['id_buku']; ?>" hidden>
                </div>

                <div class="form-group row mb-3">
                    <center><img src="foto/<?php echo $buku['coverbuku'] ?>" width="400"><br><br></center>
                </div>

                <div class="form-group row mb-3">
                    <label for="">Cover Buku</label>
                    <input type="text" class="form-control" name="coverbuku" value="<?php echo $buku['coverbuku']; ?>" readonly>
                </div>

                <div class="form-group row mb-3">
                    <input type="file" class="form-control" name="coverbuku" placeholder="" value="<?php echo $buku['coverbuku']; ?>">
                </div>

                <div class="form-group row mb-3">
                    <div class="col-sm-10 offset-md-2">
                        <button class="btn btn-info" type="submit" name="editfoto">Simpan</button>
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