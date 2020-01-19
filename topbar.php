<div id="app">
	<div class="main-wrapper">
			<div class="navbar-bg"></div>
			<nav class="navbar navbar-expand-lg main-navbar">
				<ul class="navbar-nav mr-3">
					<li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
				</ul>
				<ul class="navbar-nav navbar-right ml-auto mr-1">
					<li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
					
					<?php echo $this->session->userdata('username')?>
						
						<div class="dropdown-menu dropdown-menu-right">
							<div class="dropdown-title">
							<!-- <p><?php echo $this->session->userdata('username')?></p>
							<img alt="image" src="<?= base_url('assets/backend/img/avatar/').$this->session->userdata('username')?>" class="rounded-circle mr-1"> -->
							</div>
<!-- 							
							<a href="<?php echo base_url("admin/gantipassword"); ?>" class="dropdown-item has-icon">
								<i class="fas fa-cog"></i> Ganti Password
							</a> -->
							<div class="dropdown-divider"></div>
							<a href="<?php echo base_url("user/logout"); ?>"class="dropdown-item has-icon text-danger">
								<i class="fas fa-sign-out-alt"></i> Logout
							</a>
						</div>
					</li>
				</ul>
			</nav>
	</div>
</div>
