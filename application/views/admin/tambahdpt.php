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
										<h3> Tambah Daftar Pemilih </h3>

									<div class="box-content">
										<?php if($this->session->flashdata('info')) { ?>
										<div class="alert alert-success alert-dismissible">
											<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
											<?php echo $this->session->flashdata('info'); ?>
										</div>
										<?php } ?>
										<?php if($this->session->flashdata('failed')) { ?>
										<div class="alert alert-danger alert-dismissible">
											<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
											<?php echo $this->session->flashdata('failed'); ?>
										</div>
										<?php } ?>
									
									<form method="POST" action="<?= site_url('admin/simpandpt')?>" class="needs-validation" novalidate="">
										
											<label for="nisn">NIM</label>
											<input id="nisn" type="text" class="form-control" name="nisn" tabindex="1" required autofocus>
											<div class="invalid-feedback">
												Please fill in your NIM
											</div>
										
											<label for="nama">Nama</label>
											<input id="nm_siswa" type="text" class="form-control" name="nm_siswa" tabindex="1" required autofocus>
											<div class="invalid-feedback">
											Please fill in your Nama
											</div>
										</div>
										<label class="label-control">Jenis Kelamin</label>
										<select class="form-control" name="jk">
											<option selected value="L">L</option>
											<option value="P">P</option>
										</select>
										<label class="label-control">Kelas</label>
										<select class="form-control" name="kd_kelas">
											<?php foreach($datakelas as $load) { ?>
												<option value="<?php echo $load['kd_kelas']; ?>"> <?php echo $load['nm_kelas']; ?> </option>
											<?php 
												}
											?>
										</select>
										<br/>
										<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Simpan DPT</button>
										<a href="<?php echo base_url("user/form"); ?>" ><button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Import DPT dari Excel</button></a>
									</div>
									<?php 
										echo form_close();
									?>
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
