<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOSTRAP CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>SPK BALITA STUNTING</title>
</head>

<body>
    <div class="container mt-4 py-5 h-100">
        <div class="row">
            <div class="card-body">
                <form action="../function/func_administrator.php" method="POST" enctype="multipart/form-data">
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

                    <div class="mt-3">
                        <a class="btn btn-secondary" href="javascript:history.back()">Kembali</a>
                        <button type="submit" name="regis" class="btn btn-info">Simpan</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="resource/vendor/jquery/jquery.min.js"></script>
    <script src="resource/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="resource/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="resource/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="resource/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="resource/js/demo/chart-area-demo.js"></script>
    <script src="resource/js/demo/chart-pie-demo.js"></script>

    <!-- Page level plugins datatables -->
    <script src="resource/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="resource/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="resource/js/demo/datatables-demo.js"></script>
</body>

</html>