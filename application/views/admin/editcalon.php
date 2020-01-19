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

							<?php 
								foreach($datacalon as $loaddata) {}
							?>

							<div class="box">
								<div class="box-inner">
								<div class="box-header well">
									<h2>Tambah Calon Ketua Osis
								</div>
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
									<?php 
										$form_attribute = array (
											'method'	=> 'post',
											'class'		=> 'form-horizontal'
										);
										echo form_open_multipart('admin/updatecalon', $form_attribute);
									?>
									<div class="form-container" style="width: 400px;">
										<label class="label-control"> NISN</label>
										<?php 
											$form_attribute	= array (
												'type'		=> 'text',
												'name'		=> 'nisn',
												'class'		=> 'form-control',
												'readonly'	=> '',
												'value'		=> $loaddata['nisn']
											);
											echo form_input($form_attribute);
										?>
										<label class="label-control"> No Pemilihan</label>
										<?php 
											$form_attribute	= array (
												'type'		=> 'text',
												'name'		=> 'no',
												'class'		=> 'form-control',
												'value'		=> $loaddata['no']
											);
											echo form_input($form_attribute);
										?>
										<label class="label-control"> Nama Calon</label>
										<?php 
											$form_attribute	= array (
												'type'		=> 'text',
												'name'		=> 'nama',
												'class'		=> 'form-control',
												'value'		=> $loaddata['nama']
											);
											echo form_input($form_attribute);
										?>
										<label class="label-control"> Photo</label>
										<?php 
											$form_attribute	= array (
												'type'		=> 'file',
												'name'		=> 'photo',
												'class'		=> 'form-control',
												'value'		=> $loaddata['photo']
											);
											echo form_input($form_attribute);
										?>
										<br/>
										<button type="submit" class="btn btn-primary"> Simpan Data</button>
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
			</div>
		</div>
	</section>
</div>
<footer class="main-footer">
	<div class="footer-left">
		Copyright &copy; <div class="bullet"></div> ORMAWA STMIK IKMI 2020
	</div>
</footer>
