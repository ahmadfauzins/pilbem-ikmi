<!DOCTYPE html>
<html>
<head>
	<title>DAHSBOARD E-PEMILU BEM</title>
	<script type="text/javascript" src="<?= base_url('')?>assets/chartjs/Chart.js"></script>
	
</head>
<body>
<div class="main-content">
	<section class="section">
		<div class="section-header">
		<h2>E-PILBEM IKMI 2020</h2>
		</div>
		<div class="section-body">
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-body">
							<div class="table-responsive">										
							<h3> Realtime Hasil Pemilihan </h3><hr>
							</div>

							<div style="width: 500px">
								<canvas id="myChartt"></canvas>
							</div
							
							<?php 
								foreach($jmlcalon as $jumlah) {} 
								foreach($jmlpemilih as $jumlahpemilih) {} 
								foreach($datapilketos as $loaddata) {}
								
								foreach($vote1 as $datavote) {
									$no =  $datavote['no'];
									$no1 =  $datavote['nama'];
									$no2 = "$no " . "$no1";
								}
								foreach($vote2 as $datavote2) {
									$noo =  $datavote2['no'];
									$noo1 =  $datavote2['nama'];
									$noo2 = "$noo " . "$noo1";
								}
								foreach($vote3 as $datavote3) {
									$nooo =  $datavote3['no'];
									$nooo1 =  $datavote3['nama'];
									$nooo2 = "$nooo " . "$nooo1";
								}
								


							?>
							</div>


			
						<div class="card-body">
							<div class="table-responsive">
							<div class="col-12">
							<div class="row">
									<div class="col-md-6 col-sm-6 col-xs-6">
										<a data-toggle="tooltip" title="6 new members." class="well top-block" href="#">
											<i class="glyphicon glyphicon-user blue"></i>

											<div>Jumlah Kandidat : </div>
											<div><?php echo $jumlah['jumlah']; ?></div>
										</a>
									</div>

									<div class="col-md-6 col-sm-6 col-xs-6">
										<a data-toggle="tooltip" title="4 new pro members." class="well top-block" href="#">
											<i class="glyphicon glyphicon-user green"></i>

											<div>Jumlah DPT :</div>
											<div><?php echo $jumlahpemilih['jumlah']; ?></div>
											
										</a>
									</div>
							</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
<script>
		var ctx = document.getElementById("myChartt").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'pie',
			data: {
				labels: ["<?php echo $no2 ?>","<?php echo $noo2 ?>","<?php echo $nooo2 ?>"],
				datasets: [{
					label: '',
					data: [
						<?php echo $jumlah['jumlah']; ?>, 
						<?php echo $jumlahpemilih['jumlah']; ?>,
						<?php echo $jumlah['jumlah']; ?>
					],
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(54, 10, 235, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(54, 110, 235, 1)'
					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
	</script>

<footer class="main-footer">
	<div class="footer-left">
		Copyright &copy; <div class="bullet"></div> ORMAWA STMIK IKMI 2020
	</div>
</footer>


</body>
</html>
