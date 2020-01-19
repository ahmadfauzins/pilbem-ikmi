<!-- Main Content -->
<div class="main-content">
	<section class="section">
		<div class="section-header">
		<h3>E-PILBEM IKMI 2020</h3>
		</div>
		<div class="section-body">
			<!-- <a href="<?= base_url('a/rt/add') ?>" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> Tambah Data</a><br><br> -->
			<?php 
								foreach($jmlcalon as $jumlah) {} 
								foreach($jmlpemilih as $jumlahpemilih) {} 
								foreach($datapilketos as $loaddata) {}
							?>

							<!-- <div class=" row">
									<div class="col-md-6 col-sm-6 col-xs-6">
										<a data-toggle="tooltip" title="6 new members." class="well top-block" href="#">
											<i class="glyphicon glyphicon-user blue"></i>

											<div>Jumlah Kandidat</div>
											<div><?php echo $jumlah['jumlah']; ?></div>
										</a>
									</div>

									<div class="col-md-6 col-sm-6 col-xs-6">
										<a data-toggle="tooltip" title="4 new pro members." class="well top-block" href="#">
											<i class="glyphicon glyphicon-user green"></i>

											<div>Jumlah DPT</div>
											<div><?php echo $jumlahpemilih['jumlah']; ?></div>
											
										</a>
									</div>
							</div> -->
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-body">
							<div class="table-responsive">
							
							<div class="box">
								<div class="box-inner">
									<div class="box-header well">
										<h3>Tanggal Pelaksanaan </h3>
									</div>
									<div class="box-content">
										<?php if($this->session->flashdata('update')) { ?>
											<div class="alert alert-success alert-dismissible">
												<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
												<?php echo $this->session->flashdata('update'); ?>
											</div>
										<?php } ?>
										<?php if($this->session->flashdata('updatefailed')) { ?>
											<div class="alert alert-danger alert-dismissible">
												<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
												<?php echo $this->session->flashdata('updatefailed'); ?>
											</div>
										<?php } ?>
										<?php 
											$form_attribute = array(
												'method'    => 'post',
												'class'     => 'form-horizontal'
											);
											echo form_open('admin/updatedatapilketos', $form_attribute);
										?>
											<label class="label-control"> Tahun Periode</label>
											<?php
												$form_attribute = array(
													'type'      => 'text',
													'class'     => 'form-control',
													'name'      => 'tapel',
													'value'     => $loaddata['tapel']
												);
												echo form_input($form_attribute);
											?>
											<label class="label-control"> Tanggal Pelaksanaan</label>
											<?php
												$form_attribute = array(
													'type'      => 'date',
													'class'     => 'form-control',
													'name'      => 'tgl',
													'value'     => $loaddata['tgl']
												);
												echo form_input($form_attribute);
											?><br/>
											<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Simpan Data</button>
										<?php 
											echo form_close(); 
										?>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<div class="box">
										<div class="box-inner">
										<div class="box-header well">
											<hr>
											<h3>Reset Data Pemilihan</h3>
										</div>
										<div class="box-content">
										<p>Fitur ini akan menghapus Semua Data Pemilihan</p>
											<p>Fitur ini digunakan Apabila telah selesai melakukan pemilihan dan telah Mengunduh <a href="<?php echo base_url('index.php/admin/cetakdaftarhadir'); ?>">Daftar Hadir</a> dan <a href="<?php echo base_url('index.php/admin/laporan'); ?>">Laporan Pemilihan</a> dan ingin Melakukan Pemilihan di Tahun berikutnya</p>
											<?php if($this->session->flashdata('reset')) { ?>
											<div class="alert alert-success alert-dismissible">
											<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
											<?php echo $this->session->flashdata('reset'); ?>
										</div>
										<?php } ?>
										<?php if($this->session->flashdata('resetfailed')) { ?>
										<div class="alert alert-danger alert-dismissible">
											<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
											<?php echo $this->session->flashdata('resetfailed'); ?>
										</div>
										<?php } ?>
											<a href="<?php echo base_url('index.php/admin/resetdata'); ?>"><button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-remove"></span> Reset Data Pemilihan</button></a>
										</div>
									</div>
								</div>
								</div>
								<div class="col-lg-6">      
									<div class="box">
										<div class="box-inner">
										<div class="box-header well">
											<hr>
											<h2>Reset User Pemilih</h2>
										</div>
										<div class="box-content">
											<p>Fitur ini digunakan apabila Seorang Pemilih melaporkan bahwa dia Belum pernah memilih Sebelumnya tetapi Usernya telah dikunci karena Telah Memilih <b>(Usernya digunakan oleh orang lain)</b> </p>
										
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
											<?php
												$form_attribute = array(
													'method'    => 'post',
													'class'     => 'form-horizontal'
												);
												echo form_open('admin/resetuser', $form_attribute);
											?>
												<label class="label-control"> NISN</label>
												<?php
													$form_attribute = array(
														'type'      => 'text',
														'class'     => 'form-control',
														'name'      => 'username',
														'required'  => ''
													);
													echo form_input($form_attribute);
												?>
												<br/>
												<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-remove"></span> Reset User</button>
											<?php 
												echo form_close();
											?>
										</div>
										</div>
									</div>
								</div>
							</div>
							<hr>
							<div class="row">
								<div class="box col-md-12">
									<div class="box-inner">
										<div class="box-header well">
											<h2><i class="glyphicon glyphicon-info-sign"></i> Tentang E-PILBEM</h2>
											
										</div>
										<div class="box-content">
											<p> E-PILBEM Adalah sebuah aplikasi yang didesain khusus untuk Pemilihan Ketua BEM & Wakil Ketua BEM IKMI 2020 <br/>
												Aplikasi ini di Desain menggunakan Template <b>STISLA</b> dan dibangun menggunakan Framework <b>Code Igniter</b> 
												<br/><br/>
												Dengan adanya Aplikasi ini saya harap dapat membatu Kemahasiswaan untuk melakukan Vote Ketua BEM & Wakil Ketua BEM.
											</p>
										</div>
									</div>
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
