<!DOCTYPE html>
<html>
<head>
	<title>DAHSBOARD E-PEMILU BEM</title>
	<!-- Load File jquery.min.js yang ada difolder js -->
	<script src="<?php echo base_url('js/jquery.min.js'); ?>"></script>

	<script>
	$(document).ready(function(){
		// Sembunyikan alert validasi kosong
		$("#kosong").hide();
	});
	</script>
</head>
<body>
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
										
							<h3> Import Data Peserta </h3><hr>

		<!-- Buat sebuah tag form dan arahkan action nya ke controller ini lagi -->
			<form method="post" action="<?php echo base_url("user/form"); ?>" enctype="multipart/form-data">
			<!--
			-- Buat sebuah input type file
			-- class pull-left berfungsi agar file input berada di sebelah kiri
			-->
			<input type="file" name="file">

			<!--
			-- BUat sebuah tombol submit untuk melakukan preview terlebih dahulu data yang akan di import
			-->
			<input type="submit" name="preview" value="Preview">
		</form>
		<br>

		<?php
		if(isset($_POST['preview'])){ // Jika user menekan tombol Preview pada form
			if(isset($upload_error)){ // Jika proses upload gagal
				echo "<div style='color: red;'>".$upload_error."</div>"; // Muncul pesan error upload
				die; // stop skrip
			}

			// Buat sebuah tag form untuk proses import data ke database
			echo "<form method='post' action='".base_url("user/import")."'>";

			// Buat sebuah div untuk alert validasi kosong
			echo "<div style='color: red;' id='kosong'>
			Semua data belum diisi, Ada <span id='jumlah_kosong'></span> data yang belum diisi.
			</div>";

			echo "<table border='1' cellpadding='8'>
			<tr>
				<th colspan='6' class='text-center'>Preview Data</th>
			</tr>
			<tr>
				<th>Username</th>
				<th>Password</th>
				<th>Nama</th>
				<th>Jenis Kelamin</th>
				<th>Kode Kelas</th>
				<th>Hadir</th>
			</tr>";

			$numrow = 1;
			$kosong = 0;

			// Lakukan perulangan dari data yang ada di excel
			// $sheet adalah variabel yang dikirim dari controller
			foreach($sheet as $row){
				// Ambil data pada excel sesuai Kolom
				$username = $row['A']; // Ambil data NIS
				$password = $row['B']; // Ambil data nama
				$nm_siswa = $row['C']; // Ambil data jenis kelamin
				$jk       = $row['D'];
				$kd_kelas = $row['E']; // Insert data alamat dari kolom D di excel
				$hadir	  = $row['F']; 
				// Cek jika semua data tidak diisi
				if($username == "" && $password == "" && $nm_siswa == "" && $jk == "" && $kd_kelas == "" && $hadir == "")
					continue; // Lewat data pada baris ini (masuk ke looping selanjutnya / baris selanjutnya)

				// Cek $numrow apakah lebih dari 1
				// Artinya karena baris pertama adalah nama-nama kolom
				// Jadi dilewat saja, tidak usah diimport
				if($numrow > 1){
					// Validasi apakah semua data telah diisi
					$username_td = ( ! empty($username))? "" : " style='background: #E07171;'"; // Jika NIS kosong, beri warna merah
					$password_td = ( ! empty($password))? "" : " style='background: #E07171;'"; // Jika NIS kosong, beri warna merah
					$nama_td = ( ! empty($nm_siswa))? "" : " style='background: #E07171;'"; // Jika Nama kosong, beri warna merah
					$jk_td = ( ! empty($jk))? "" : " style='background: #E07171;'"; // Jika Jenis Kelamin kosong, beri warna merah
					$kd_kelas_td = ( ! empty($kd_kelas))? "" : " style='background: #E07171;'"; // Jika NIS kosong, beri warna merah
					$hadir_td = ( ! empty($hadir))? "" : " style='background: #E07171;'"; // Jika Alamat kosong, beri warna merah

					// Jika salah satu data ada yang kosong
					if($username == "" or $password == "" or $nm_siswa == "" or $jk == "" or $kd_kelas == "" or $hadir == ""){
						$kosong++; // Tambah 1 variabel $kosong
					}

					echo "<tr>";
					echo "<td".$username_td.">".$username."</td>";
					echo "<td".$password_td.">".$password."</td>";
					echo "<td".$nama_td.">".$nm_siswa."</td>";
					echo "<td".$jk_td.">".$jk."</td>";
					echo "<td".$kd_kelas_td.">".$kd_kelas."</td>";
					echo "<td".$hadir_td.">".$hadir."</td>";
					echo "</tr>";
				}

				$numrow++; // Tambah 1 setiap kali looping
			}

			echo "</table>";

			// Cek apakah variabel kosong lebih dari 0
			// Jika lebih dari 0, berarti ada data yang masih kosong
			if($kosong > 0){
			?>
				<script>
				$(document).ready(function(){
					// Ubah isi dari tag span dengan id jumlah_kosong dengan isi dari variabel kosong
					$("#jumlah_kosong").html('<?php echo $kosong; ?>');

					$("#kosong").show(); // Munculkan alert validasi kosong
				});
				</script>
			<?php
			}else{ // Jika semua data sudah diisi
				echo "<hr>";

				// Buat sebuah tombol untuk mengimport data ke database
				echo "<button type='submit' name='import'>Import</button>";
				echo "<a href='".base_url("admin/datadpt")."'>Cancel</a>";
			}

			echo "</form>";
		}
		?>
	</body>
	</html>
