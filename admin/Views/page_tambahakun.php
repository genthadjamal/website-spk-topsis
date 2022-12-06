<div class="card-body">
    <form action="function/func_administrator.php" method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="form-group col-md-12">
                <label for="">
                    <h3><b>Tambah Akun</b></h3>
                </label>
            </div>
            <input type="hidden" class="form-control" name="id_admin" placeholder="Otomatis Terisi oleh system">
            <div class="form-group col-md-12">
                <label for="">Nama</label>
                <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama" required>
            </div>
            <div class="form-group col-md-12">
                <label for="">E-mail</label>
                <input type="email" class="form-control" name="email" placeholder="Masukkan Email" required>
            </div>
            <div class="form-group col-md-12">
                <label for="">Username</label>
                <input type="text" class="form-control" name="username" placeholder="Masukkan Username" required>
            </div>
            <div class="form-group col-md-12">
                <label for="">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Masukkan Password" minlength="6" required>
            </div>
            <div class="form-group col-md-12">
                <label for="">Konfirmasi Password </label>
                <input type="password" class="form-control" name="password2" placeholder="Masukkan Konfirmasi Password" minlength="6" required>
            </div>
        </div>

        <div class="">
            <a class="btn btn-secondary" href="javascript:history.back()">Kembali</a>
            <button type="submit" name="tambahakun" class="btn btn-info">Simpan</button>
        </div>
    </form>
</div>