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

							<?php if($this->session->flashdata('info')) { ?>
								<script>alert("Berhasil Menghapus Data");</script>
							<?php } ?>
							<?php if($this->session->flashdata('failed')) { ?>
								<script>alert("Gagal Menghapus Data");</script>
							<?php } ?>
							<div class="box">
								<div class="box-inner">
									<div class="box-header well">
										<h2>Data Pemilih Tetap (DPT)</h2>
									</div>
									<div class="box-content">
										<table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
											<thead>
												<th class="text-center">No</th>
												<th class="text-center">NIM</th>
												<th class="text-center">Nama Mahasiswa</th>
												<th class="text-center">L/P</th>
												<th class="text-center">Kelas</th>
												<th class="text-center"></th>
												<th class="text-center"></th>
											</thead>
											<tbody>
												<?php
													$no = 1;
													foreach($datadpt as $load) {
												?>
													<tr>
														<td class="text-center"><?php echo $no++; ?></td>
														<td class="text-center"><?php echo $load['username']; ?></td>
														<td><?php echo $load['nm_siswa']; ?></td>
														<td class="text-center"><?php echo $load['jk']; ?></td>
														<td><?php echo $load['nm_kelas']; ?></td>
														<td width="100"><a href="<?php echo base_url('index.php/admin/editdpt'); ?>/<?php echo $load['username']; ?>"><button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-edit"></span> Edit</button></a></td>
														<td width="100"><a href="<?php echo base_url('index.php/admin/hapusdpt'); ?>/<?php echo $load['username'];  ?>"><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span> Hapus</button></a></td>
													</tr>
												<?php
													}
												?>
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
