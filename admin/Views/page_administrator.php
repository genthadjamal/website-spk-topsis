<!-- <?php
        if (empty($_SESSION['username'])) {
            header('location: ../Auth/page_login.php');
        }
        ?> -->

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Data Administrator</h1>
<p class="mb-4"> Menampilkan data akun yang ada pada website <a class="text-info" target="_blank" href="../index.php">SISTEM PENDUKUNG KEPUTUSAN</a>.</p>

<!-- DataTales -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-info">List Akun</h6>
    </div>

    <div class="card-body">
        <!-- TOMBOL TAMBAH -->
        <a href="index.php?page=tambahakun" class="btn btn-primary mb-3"><i class="fas fa-fw fa-plus"></i> Tambah Akun</a>

        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>NO</th>
                        <!-- <th>ID</th> -->
                        <!-- <th>Role</th> -->
                        <th width="200px">Nama</th>
                        <th width="200px">E-mail</th>
                        <th>Username</th>
                        <!-- <th>Password</th> -->
                        <th>Dibuat</th>
                        <th>Diubah</th>
                        <th>Edit</th>
                        <th>Hapus</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $data = mysqli_query($connect, "SELECT * FROM tbl_admin");

                    $awal = 0;
                    $no = $awal + 1;

                    while ($akun = mysqli_fetch_array($data)) {
                    ?>
                        <tr>
                            <td> <?= $no++ ?></td>
                            <td> <?= $akun['nama_admin'] ?></td>
                            <td> <?= $akun['email'] ?></td>
                            <td> <?= $akun['username'] ?></td>
                            <td> <?= $akun['dibuat'] ?></td>
                            <td> <?= $akun['diubah'] ?></td>
                            <td>
                                <a class="btn btn-warning mb-1" data-toggle="modal" data-target="#editakun<?php echo $akun['id_admin'] ?>"><i class="bi bi-pencil-fill"></i></a>
                            </td>
                            <td>
                                <a class="btn btn-danger flash-hapus" href="function/hapus_user.php?id_admin=<?= $akun['id_admin']; ?>"><i class="bi bi-trash"></i></a>
                            </td>
                        </tr>

                        <!-- MODAL EDIT DATA -->
                        <div class="modal fade" id="editakun<?php echo $akun['id_admin'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="fw-bolder modal-title" id="exampleModalLabel">Edit Data akun</h5>
                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <!-- FORM EDIT DATA -->
                                        <form action="function/func_administrator.php" method="POST">
                                            <div class="row">
                                                <!-- <div class="form-group col-md-12"> -->
                                                <!-- <label for="tambahid">ID Admin</label> -->
                                                <input type="" class="form-control" name="id_admin" placeholder="Masukkan Nama" value="<?php echo $akun['id_admin']; ?>" hidden>
                                                <!-- </div> -->
                                                <div class="form-group col-md-12">
                                                    <label for="">E-mail</label>
                                                    <input type="email" class="form-control" name="email" placeholder="Masukkan Email" value="<?php echo $akun['email']; ?>" readonly>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label for="">Nama</label>
                                                    <input type="text" class="form-control" name="nama_admin" placeholder="Masukkan Nama" value="<?php echo $akun['nama_admin']; ?>" required>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label for="">Username</label>
                                                    <input type="text" class="form-control" name="username" placeholder="Masukkan Username" value="<?php echo $akun['username']; ?>" required>
                                                </div>
                                            </div>

                                            <div class="modal-footer">
                                                <button class="btn btn-secondary" type="button" data-dismiss="modal">CANCEL</button>
                                                <button type="submit" name="editdataakun" class="btn btn-info">EDIT DATA</button>
                                            </div>
                                        </form>

                                        <!-- FORM EDIT PASSWORD -->
                                        <form action="function/func_administrator.php" method="POST">
                                            <div class="row">
                                                <!-- ID ADMIN HIDDEN-->
                                                <input type="" class="form-control" name="id_admin" placeholder="" value="<?php echo $akun['id_admin']; ?>" hidden>
                                                <!-- END ID ADMIN HIDDEN-->
                                                <div class="form-group col-md-12">
                                                    <label for="">Edit Password</label>
                                                    <input type="password" class="form-control" name="password" id="inputPassword" placeholder="Masukkan Password" minlength="6" required>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label for="">Masukkan Password ulang</label>
                                                    <input type="password" class="form-control" name="password2" id="inputPassword" placeholder="Masukkan Konfirmasi Password" minlength="6" required>
                                                </div>
                                                <!-- <div class="form-group col-md-12">
                                                    <input type="checkbox" onclick="myFunction()"> Tampilkan Password
                                                </div> -->

                                            </div>

                                            <div class="modal-footer">
                                                <button class="btn btn-secondary" type="button" data-dismiss="modal">CANCEL</button>
                                                <button type="submit" name="editdatapassword" class="btn btn-info">EDIT PASSWORD</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END MODAL EDIT DATA -->
                        <!-- MODAL EDIT PW -->
                        <!-- <div class="modal fade" id="editpassword<?php echo $akun['id_admin'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="fw-bolder modal-title" id="exampleModalLabel">Edit Data akun</h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="function/func_administrator.php" method="POST">
                                        <div class="row">
                                            <input type="" class="form-control" name="id_admin" placeholder="" value="<?php echo $akun['id_admin']; ?>" hidden>
                                            <div class="form-group col-md-12">
                                                <label for="">Password</label>
                                                <input type="password" class="form-control" name="password" id="inputPassword" value="" required>
                                            </div>
                                        </div>

                                        <div class="modal-footer">
                                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                            <button type="submit" name="editdatapassword" class="btn btn-info">Simpan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div> -->
                        <!-- END MODAL EDIT DATA -->
                    <?php } ?>

                </tbody>
            </table>
        </div>
    </div>
</div>

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