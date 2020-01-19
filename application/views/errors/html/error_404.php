<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>404 Page Not Found</title>
<!-- General CSS Files -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	
	<!-- CSS Libraries -->
	<link rel="stylesheet" href="assets/modules/jqvmap/dist/jqvmap.min.css">
	<link rel="stylesheet" href="assets/modules/weather-icons/css/weather-icons.min.css">
	<link rel="stylesheet" href="assets/modules/weather-icons/css/weather-icons-wind.min.css">
	<link rel="stylesheet" href="assets/modules/summernote/dist/summernote-bs4.css">

	<!-- Template CSS -->
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/components.css">

</head>
<body>
<div id="app">
	<div id="app">
		<section class="section">
			<div class="container mt-4">
				<div class="row">
					<div class="col-12">
						<div class="card card-primary mt-10">
							
		<div class="section-body">
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-body">
							<div class="table-responsive">
							<div class="card-header"><h1>Aplikasi E-Pemilu BEM IKMI 2020</h1></div>
							<div class="card-body">
							<h1><?php echo $heading; ?></h1>
							<?php echo $message; ?>
							</div>
							</div>

							<a href="user/index" class="btn btn-primary btn-lg btn-block" >
											Kembali
										</a>
						</div>
						<br>
						<div class="simple-footer">
							Copyright &copy; ORMAWA STMIK IKMI 2019
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>

	</div>
</div>

	
	<!-- General JS Scripts -->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
	<script src="ssets/js/stisla.js"></script>

	<!-- JS Libraies -->
	<script src="modules/simpleweather/jquery.simpleWeather.min.js"></script>
	<script src="modules/chart.js/dist/chart.min.js"></script>
	<script src="modules/jqvmap/dist/jquery.vmap.min.js"></script>
	<script src="modules/jqvmap/dist/maps/jquery.vmap.world.js"></script>
	<script src="modules/summernote/dist/summernote-bs4.js"></script>
	<script src="modules/chocolat/dist/js/jquery.chocolat.min.js"></script>
	
	<!-- Template JS File -->
	<script src="js/scripts.js"></script>
	<script src="js/custom.js"></script>

	  <!-- Page Specific JS File -->
	  <script src="js/page/index-0.js"></script>

</body>

</html>
