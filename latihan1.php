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
     				</li>
      				<li class="nav-item dropdown">
        				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          					Dropdown
        				</a>
        				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
          					<a class="dropdown-item" href="#">Action</a>
          					<a class="dropdown-item" href="#">Another action</a>
          				<div class="dropdown-divider"></div>
          					<a class="dropdown-item" href="#">Something else here</a>
        				</div>
      				</li>
      				<li class="nav-item">
        				<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      				</li>
    			</ul>
    			<form class="form-inline my-2 my-lg-0">
      				<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
   				</form>
  			</div>
		</nav>
	<!-- End Heafer -->

	<!-- Content -->
		<div container>
			<div class="row justify-content-center">
				<div class="col-md-8" style="padding:20px;">
					<div class="jumbotron">
  						<h1 class="display-4">Hello, world!</h1>
 						<p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
 						<hr class="my-4">
 						<p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
  						<a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
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