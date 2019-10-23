<!DOCTYPE html>
<html lang="en">
<head>
	<title>Latihan Bootstrap</title>
	<!-- Pemanggilan CSS -->
	<link rel="stylesheet" type="text/css" href="Assets/css/bootstrap.min.css">
	<!-- Akhir pemanggilan -->
</head>
<body>
	<!-- Header -->
  <form action="" method="post">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
  			<a class="navbar-brand" href="#">Navbar</a>
  			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    			<span class="navbar-toggler-icon"></span>
 			</button>

  			<div class="collapse navbar-collapse" id="navbarSupportedContent">
    			<ul class="navbar-nav mr-auto">
     		 		<li class="nav-item active">
        				<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      				</li>
      				<li class="nav-item">
        				<a class="nav-link" href="#">Link</a>
    			</ul>
    			<form class="form-inline my-2 my-lg-0">
      				<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
   				</form>
  			</div>
		</nav>
	<!-- End Heafer -->

	<!-- Content -->
		<div class="container-fluid">
			<div class="row justify-content-left">
				<div class="col-md-6" style="padding:20px;">
					<div class="card">
            <div class="card-header">Raport</div>
            <div class="card-body">
              <form action="" method="post">
                <div class="form-group">
                  <label for="">Nama</label>
                  <input type="text" name="nama" class="form-control" required>
                </div>
                <div class="form-group">
                  <label for="">Kelas</label>
                  <input type="text" name="kelas" class="form-control" required>
                </div>
                <div class="form-group">
                  <button  type="submit" name="simpan" class="btn btn-primary btn-block">simpan</button>
                </div>
              </form>
            </div>
					</div>
				</div>
        <div class="col-md-6">
          <center>
            <h2><u>Output</u></h2>
          </center>
          <?php
          if(isset($_POST['simpan'])){
            $nama = $_POST['nama'];
            $kelas = $_POST['kelas'];
            // var_dump($nama);
          }
          ?>

          <div class="table-responsive">
            <table class="table">
              <tr>
                <th>Nama</th>
                <th>Kelas</th>
              </tr>
              <tr>
                <td><?php  if(isset($nama)) echo $nama; ?></td>
                <td><?php if(isset($kelas)) echo $kelas; ?></td>
              </tr>
            </table>
          </div>
        </div>
			</div>
		</div>
	<!-- End Content -->

	<!-- Footer -->
		<footer>
			<center>&copy; 2019 SMK Assalam</center>
		</footer>
	<!-- End Footer -->

	<!-- Pemanggilan Js -->
	<script src="Assets/js/jquery-3.4.1.min.js"></script>
	<script src="Assets/js/bootstrap.bundle.min.js"></script>
	<script src="Assets/js/bootstrap.bundle.js"></script>
	<!-- Akhir Pemanggilan js -->
</body>
</html>