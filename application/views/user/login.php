<div id="app">
	<div id="app">
		<section class="section">
			<div class="container mt-4">
				<div class="row">
					<div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
					<a href="<?php echo base_url('');?>"><center><img src="<?php echo base_url('assets/img/logobem.png');?>" width="90%" max alt=""></center></a>
						<div class="card card-primary mt-4">
							<div class="card-header"><h4>Login</h4></div>
							<div class="card-body">
						<div class="alert alert-info">
							Gunakan NIM / NIDN / NIK* anda Sebagai Username dan Password
						</div>
						<?php if($this->session->flashdata('failed')) { ?>
							<div class="alert alert-danger alert-dismissible">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<?php echo $this->session->flashdata('failed'); ?>
							</div>
						<?php } ?>
						<?php if($this->session->flashdata('block')) { ?>
							<div class="alert alert-danger alert-dismissible">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<?php echo $this->session->flashdata('block'); ?>
							</div>
						<?php } ?>
					
						<form method="POST" action="<?= site_url('user/loginvalidation')?>" class="needs-validation" novalidate="">
									<div class="form-group">
										<label for="email">NIM</label>
										<input id="email" type="number" class="form-control" name="username" tabindex="1" required autofocus>
										<div class="invalid-feedback">
											Please fill in your email
										</div>
									</div>	
			
                    				<div class="form-group">
										<div class="d-block">
											<label for="password" class="control-label">Password</label>
										</div>
										<input id="password" type="password" class="form-control" name="password" tabindex="2" required>
										<div class="invalid-feedback">
											please fill in your password
										</div>
									</div>
                        
									<div class="form-group">
										<button type="submit" name="login" class="btn btn-primary btn-lg btn-block" tabindex="4">
											Login
										</button>
									</div>
									<h10><center>Ket. *Untuk Staff/Karyawan Dan Lain Lain.</h10>
								</form>
							</div>
						</div>
						<div class="simple-footer">
							Copyright &copy; ORMAWA STMIK IKMI 2019
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
