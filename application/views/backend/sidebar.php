<div class="main-sidebar">
	<aside id="sidebar-wrapper">
		<div class="sidebar-brand col-xl-12">
			<a href="<?php echo base_url('') ?>">
				<img  src="<?php echo base_url('assets/img/logobem.png');?>" width="90%" alt="">
			</a>
			<!-- <img alt="image" class="col-md-8 rounded-circle mr-1" src="<?= base_url('assets/backend/img/avatar/').$this->session->userdata('img')?>">	 -->
		</div>
		<div class="sidebar-brand sidebar-brand-sm col-md-13">
			<a href="<?php echo base_url('') ?>">
				<img  src="<?php echo base_url('assets/img/logobem.png');?>" width="100%" alt="">
			</a>	
		</div>		
			<ul class="sidebar-menu">
				<li class="menu-header">Dashboard</li>
				<li><a class="nav-link" href="<?php echo base_url('admin/dashboard') ?>"><i class="fas fa-home"></i> <span>Dashboard</span></a></li>
				
				<li class="menu-header">Master Data</li>
				<li><a class="nav-link" href="<?php echo base_url('admin/index'); ?>"><i class="fas fa-envelope"></i> <span>Data Pelaksanaan</span></a></li>
				<li><a class="nav-link"  href="<?php echo base_url('admin/datakelas'); ?>"><i class="fas fa-file-signature"></i> <span>Data Kelas</span></a></li>
				<li><a class="nav-link" href="<?php echo base_url('admin/tambahcalon'); ?>"><i class="fas fa-comment-dots"></i> <span>Tambah Kandidat</span></a></li>
				<li><a class="nav-link" href="<?php echo base_url("admin/datacalon"); ?>"><i class="fas fa-money-bill-wave"></i> <span>Lihat Kandidat</span></a></li>
				
				<li class="menu-header">Data Pemilih</li>
				<li><a class="nav-link" href="<?php echo base_url('admin/tambahdpt'); ?>"><i class="fas fa-envelope"></i> <span>Tambah Pemilih</span></a></li>
				<li><a class="nav-link"  href="<?php echo base_url("admin/datadpt"); ?>"><i class="fas fa-file-signature"></i> <span>Lihat Data Pemilih</span></a></li>
						
				<li class="menu-header">Hasil Pemilihan </li>
				<li><a class="nav-link"  href="<?php echo base_url("admin/hasilvote") ?>"><i class="fas fa-file-signature"></i> <span>Hasil Vote</span></a></li>
				
				<li class="menu-header">Laporan </li>
				<li><a class="nav-link"  href="<?php echo base_url("admin/daftarhadir") ?>"><i class="fas fa-file-signature"></i> <span>Daftar Hadir</span></a></li>
				<li><a class="nav-link"  href="<?php echo base_url("admin/laporan") ?>"><i class="fas fa-print"></i> <span>Cetak Laporan</span></a></li>
			</ul>
	</aside>
</div>
