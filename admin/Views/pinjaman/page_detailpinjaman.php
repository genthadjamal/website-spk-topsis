<!-- Page pesanan -->
<h1 class="h3 mb-2 text-gray-800">Detail Pesanan</h1>
<p class="mb-4"> Detail Data pesanan yang ada pada website<a class="text-info" target="_blank" href="../index.php" target="_blank"> ADJI NEON</a>.</p>


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-info">Peminjaman</h6>
    </div>
    <?php
    if (!isset($_GET['id_peminjam'])) {
        // kalau tidak ada id di query string
        header('Location: index.php?page=peminjaman');
    }

    //ambil id dari query string
    $id_peminjam = filter_var($_GET['id_peminjam'], FILTER_SANITIZE_URL);

    // buat query untuk ambil data dari database
    $data = mysqli_query($connect, "SELECT * FROM tbl_peminjaman WHERE id_peminjam=$id_peminjam");

    $awal = 0;
    $no = $awal + 1;

    while ($peminjaman = mysqli_fetch_array($data)) {
    ?>
        <div class="card-body">
            <!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <a class="btn btn-info" href="javascript:history.back()"><i class="bi bi-arrow-left-square-fill"> Kembali</i></a>
        </div> -->
            <div class="form-group row mb-3">
                <label for="penerbit" class="col-sm-2 col-form-label"><b>Peminjaman</b></label>
            </div>
            <div class="form-group row mb-3">
                <label for="id_pesanan" class="col-sm-2 col-form-label">ID Peminjam</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="id_peminjam" value="<?php echo $peminjaman['id_peminjam']; ?>" readonly>
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="penulis" class="col-sm-2 col-form-label">Invoice</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="invoice" value="<?php echo $peminjaman['invoice']; ?>" readonly>
                </div>
            </div>
            <!-- <div class="form-group row mb-3">
                <label for="penerbit" class="col-sm-2 col-form-label">Tanggal Pinjam</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="" value="<?php echo $peminjaman['dibuat']; ?>" readonly>
                </div>
            </div> -->
            <div class="form-group row mb-3">
                <label for="penerbit" class="col-sm-2 col-form-label"><b>IDENTITAS PEMINJAM</b></label>
            </div>
            <div class="form-group row mb-3">
                <label for="penerbit" class="col-sm-2 col-form-label">Nama Peminjam</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="nama_peminjam" value="<?php echo $peminjaman['nama_peminjam']; ?>" readonly>
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="penerbit" class="col-sm-2 col-form-label">No Identitas</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="id_anggota" value="<?php echo $peminjaman['id_anggota']; ?>" readonly>
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="penulis" class="col-sm-2 col-form-label"> <b>BUKU</b></label>
            </div>
            <div class="form-group row mb-3">
                <label for="penerbit" class="col-sm-2 col-form-label">Buku yang dipinjam</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="judul_buku" value="<?php echo $peminjaman['judul_buku']; ?>" readonly>
                </div>
            </div>

            <div class="form-group row mb-3">
                <label for="penulis" class="col-sm-2 col-form-label">Tanggal Pinjam</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="tangal_pinjam" value="<?php echo $peminjaman['tanggal_pinjam']; ?>" readonly>
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="penulis" class="col-sm-2 col-form-label">Tanggal Kembali</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="tanggal_kembali" value="<?php echo $peminjaman['tanggal_kembali']; ?>" readonly>
                </div>
            </div>

            <form action="function/func_peminjaman.php" method="POST" enctype="multipart/form-data">
                <!-- ID PEMINJAMAN -->
                <input type="text" class="form-control" name="id_peminjam" value="<?php echo $peminjaman['id_peminjam']; ?>" hidden>
                <!--  -->
                <div class="form-group row mb-3">
                    <label for="penerbit" class="col-sm-2 col-form-label">Status Peminjaman</label>
                    <div class="col-sm-5">
                        <select class="form-control" name="status_peminjaman">
                            <option value="<?php echo $peminjaman['status_peminjaman']; ?>" selected disabled>Pilih</option>
                            <option value="$peminjaman['status_peminjaman']" <?php if ($peminjaman['status_peminjaman'] == $peminjaman['status_peminjaman']) : echo "selected";
                                                                                endif; ?>><?php echo $peminjaman['status_peminjaman']; ?> </option>
                            <option value="Sudah Dikonfirmasi" <?php if ($peminjaman['status_peminjaman'] == 'Sudah Dikonfirmasi') : echo "selected";
                                                                endif; ?>> Sudah Dikonfirmasi</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <label for="penerbit" class="col-sm-2 col-form-label">Status Buku</label>
                    <div class="col-sm-5">
                        <select class="form-control" name="status_buku">
                            <option value="<?php echo $peminjaman['status_buku']; ?>" selected disabled>Pilih</option>
                            <option value="Belum Diambil" <?php if ($peminjaman['status_buku'] == 'Belum Diambil') : echo "selected";
                                                            endif; ?>>Belum Diambil </option>
                            <option value="Sudah Diambil" <?php if ($peminjaman['status_buku'] == 'Sudah Diambil') : echo "selected";
                                                            endif; ?>> Sudah Diambil</option>
                            <option value="Belum Kembali" <?php if ($peminjaman['status_buku'] == 'Belum Kembali') : echo "selected";
                                                            endif; ?>>Belum Kembali</option>
                        </select>
                    </div>
                </div>
                <!-- <div class="form-group row mb-3">
                    <label for="penerbit" class="col-sm-2 col-form-label">Tanggal Konfirmasi </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control"  name="diubah" value="<?php echo $pesanan['diubah']; ?>" readonly>
                    </div>
                </div> -->
                <div class="form-group row mb-3">
                    <div class="col-sm-10 offset-md-2">
                        <button class="btn btn-info" type="submit" name="editdatapeminjaman">Simpan</button>
                        <a class="btn btn-secondary" href="javascript:history.back()">Kembali</a>
                    </div>
                </div>
            </form>
        <?php } ?>
        </div>
</div>