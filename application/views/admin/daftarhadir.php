<!-- Main Content -->
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

								<?php foreach($jmlpemilih as $pemilih)?>
								<?php foreach($jmlvote as $vote); ?>
								<div class="box">
									<div class="box-inner">
										<div class="box-header well">
											<div class="row">
												<div class="col-lg-6">
													<h3>Daftar Hadir Pemilihan</h3> 
													</hr>
												</div>
												
												<div class="col-lg-6 text-right">
													<a href="<?php echo base_url('index.php/admin/cetakdaftarhadir'); ?>"> <button class="btn btn-sm btn-primary"><span class="glyphicon glyphicon-save"></span> Download Daftar Hadir</button> </a>
												</div>
											</div>
										</div>
										<div class="box-content">
											<hr>
											<table border="0">
												<tr>
													<td>Jumlah DPT</td>
													<td>:</td>
													<td><?php echo $pemilih['jumlah']; ?></td>
												</tr>
												<tr>
													<td>Jumlah DPT yang Hadir</td>
													<td>:</td>
													<td><?php echo $vote['jumlah']; ?></td>
												</tr>
												<tr>
													<td>Jumlah DPT yang Tidak Hadir</td>
													<td>:</td>
													<td>
														<?php echo $pemilih['jumlah'] - $vote['jumlah'] ; ?>
													</td>
												</tr>
											</table>
											<br>
											<table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
												<thead>
													<th width="15" class="text-center">No</th>
													<th class="text-center">NIM</th>
													<th class="text-center">Nama</th>
													<th class="text-center">Kelas</th>
													<th class="text-center">Keterangan</th>
												</thead>
												<tbody>
													<?php 
														$no = 1;
														foreach($daftarhadir as $loaddata) { 
													?>
														<tr> 
															<td> <?php echo $no++; ?></td>
															<td> <?php echo $loaddata['username']; ?> </td>
															<td> <?php echo $loaddata['nm_siswa']; ?> </td>
															<td> <?php echo $loaddata['nm_kelas']; ?> </td>
															<td> <?php echo $loaddata['hadir']; ?> </td>
														</tr>
													<?php } ?>
												</tbody>
											</table>
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
<footer class="main-footer">
	<div class="footer-left">
		Copyright &copy; <div class="bullet"></div> ORMAWA STMIK IKMI 2020
	</div>
</footer>
