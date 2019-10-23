<?php
    session_start();
    if ($_SESSION['akseslogin']) {
        # code...   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan Bootstrap</title>
    <!-- Pemanggilan CSS -->
    <link rel="stylesheet" type="text/css" href="Assets/css/bootstrap.min.css">
    <!-- Akhir pemanggilan -->
  <style>
      font-family: 'Chilanka',
      cursive;
  </style>
    <title>Assalaam Book Store</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">IFS_FOOD</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="soal_pembelian.php">Food</a>
                </li>
            </ul>
            <form action="logout.php">
                <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Logout</button>
            </form>
        </div>
    </nav>
    <br><br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card border-primary">
                    <div class="card-header">Pembelian Makanan</div>
                    <div class="card-body">
                        <form action="soal_pembelian_pro2.php" method="post">
                            <input type="hidden" name="nama" value=" <?php echo $_POST['nama'] ?> " id="nama">
                            <input type="hidden" name="alamat" value=" <?php echo $_POST['alamat'] ?> " id="alamat">
                            <input type="hidden" name="jk" value=" <?php echo $_POST['jk'] ?> " id="jk">
                            <input type="hidden" name="tanggal_beli" value=" <?php echo $_POST['tanggal_beli'] ?> " id="tanggal_beli">
                            <input type="hidden" name="jumlah" value=" <?php echo $_POST['jumlah'] ?> " id="jumlah">
                            <?php
                            if (isset($_POST['simpan'])) {
                                $jml_form = $_POST['jumlah'];
                                for ($a = 0; $a < $jml_form; $a++) { ?>
                                        <div class="form-group">
                                            <label for="">Nama Makanan</label>
                                            <input type="text" class="form-control" name="makanan[]" id="" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Kode</label>
                                            <input type="text" class="form-control" name="kode[]" id="" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="">Jenis</label>
                                            <select class="form-control" name="jenis[]" id="">
                                                    <option value="Makanan">Makanan</option>
                                                    <option value="Minuman">Minuman</option>
                                                    <option value="Cemilan">Cemilan</option>
                                                    <option value="Buah - Buahan">Buah - Buahan</option>
                                                    <option value="Sayuran">Sayuran</option>
                                            </select>
                                        </div>
                                    <div class="form-group">
                                        <label for="">Harga</label>
                                        <input type="number" class="form-control" name="harga[]" id="" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Jumlah</label>
                                        <input type="number" class="form-control" name="j[]" id="" min="1" required><br><br><hr><br><br>
                                    </div>
                                <?php } ?>
                                <div class="form-group">
                                    <button type="submit" name="simpan" class="btn btn-outline-primary">Proses</button>
                                    <button type="reset" class="btn btn-outline-warning">Reset</button>
                                </div>
                            <?php } ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="navbar-nav mr-auto"></div>
        <a class="navbar-brand" href="#">Create Irsyal Fauzan Sanad</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>
    <!-- Pemanggilan Js -->
    <script src="Assets/js/jquery-3.4.1.min.js"></script>
    <script src="Assets/js/bootstrap.bundle.min.js"></script>
    <script src="Assets/js/bootstrap.bundle.js"></script>
    <!-- Akhir Pemanggilan js -->
</body>
</html>
<?php
    }else{
        echo "<script> alert('Silahkan Login Terlebih dahulu');"." window.location.href='index.php' </script>";
    }
?>