<?php 
Class User extends CI_Controller {

	private $filename = "import_data"; // Kita tentukan nama filenya
	
	public function __construct() 
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper(array('form','url'));
		$this->load->library(array('session'));
		$this->load->model(array('User_Model'));
	}
	public function login() 
		{
		if ($this->session->userdata('username') === '1') {
			redirect('index');
		}else {
			$this->load->view('user/head');
			$this->load->view('user/login');
			$this->load->view('user/footer');
		}

	}
	// public function loginvalidation() {
	// 	$username				= $this->input->post('username', TRUE);
	// 	$password				= $this->input->post('password', TRUE);
	// 	$result					= $this->User_Model->login($username, $password);
	// 	$valid					= $this->User_Model->valid($username);
	// 	if($valid == true) {
	// 		$this->session->set_flashdata('block', 'Anda Sudah Pernah Melakukan Voting, Akun Anda Sekarang Dinonaktifkan, Jika anda merasa belum pernah Melakukan Voting Sebelumnya, Silahkan hubungi pengurus Untuk Mengaktifkan Akun anda');
	// 		redirect('user/login');
	// 	}
	// 	else {
	// 		if($result == true) {
	// 			$this->session->set_userdata(array(
	// 				'username'	=> $username
	// 			));
	// 			redirect('user/index');
	// 		}
	// 		else
	// 		{
	// 			$this->session->set_flashdata('failed', 'Username atau Password Salah');
	// 			redirect('user/login');
	// 		}
	// 	}
	// }	
	public function loginvalidation() {
		$username				= $this->input->post('username', TRUE);
		$password				= $this->input->post('password', TRUE);
		// $result					= $this->User_Model->login($username, $password);
		// $valid					= $this->User_Model->valid($username);
		// if($valid == true) {
		// 	$this->session->set_flashdata('block', 'Anda Sudah Pernah Melakukan Voting, Akun Anda Sekarang Dinonaktifkan, Jika anda merasa belum pernah Melakukan Voting Sebelumnya, Silahkan hubungi pengurus Untuk Mengaktifkan Akun anda');
		// 	redirect('user/login');
		// }
		// else {
		// 	if($result == true) {
		// 		$this->session->set_userdata(array(
		// 			'username'	=> $username
		// 		));
		// 		redirect('user/index');
		// 	}
		// 	else
		// 	{
		// 		$this->session->set_flashdata('failed', 'Username atau Password Salah');
		// 		redirect('user/login');
		// 	}
		// }
		redirect('user/countdown');
	}
	public function logout()
	{
		$this->session->unset_userdata('username');
		redirect('user/login');
	}
	
	public function index() {
		if(! $this->session->userdata('username'))
		{
			redirect('user/login');
		}
		$user				= $_SESSION['username'];
		$data['username']	= $user;
		$data['datacalon']	= $this->User_Model->datamodel();
		$this->load->view('backend/header');
		$this->load->view('backend/topbar');
		$this->load->view('user/index', $data);
		$this->load->view('backend/footer');
	}
	public function vote() {
		if(! $this->session->userdata('username'))
		{
			redirect('user/login');
		}
		$nisn		= $this->input->post('nisn');
		$username	= $this->input->post('username');
		$vote		= $this->User_Model->vote($nisn, $username);
		$hadir		= $this->User_Model->hadir($username);
		if($vote = true) {
			redirect('user/viewlogout');
		}
	}

	public function viewlogout() {
		$this->load->view('backend/header');
		$this->load->view('backend/topbar');
		$this->load->view('user/viewlogout');
		$this->load->view('backend/footer');
	}




	public function form(){
		if(! $this->session->userdata('username'))
		{
			redirect('user/login');
		}
		$data = array(); // Buat variabel $data sebagai array
		
		if(isset($_POST['preview'])){ // Jika user menekan tombol Preview pada form
			// lakukan upload file dengan memanggil function upload yang ada di SiswaModel.php
			$upload = $this->User_Model->upload_file($this->filename);
			
			if($upload['result'] == "success"){ // Jika proses upload sukses
				// Load plugin PHPExcel nya
				include APPPATH.'third_party/PHPExcel/PHPExcel.php';
				
				$excelreader = new PHPExcel_Reader_Excel2007();
				$loadexcel = $excelreader->load('excel/'.$this->filename.'.xlsx'); // Load file yang tadi diupload ke folder excel
				$sheet = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);
				
				// Masukan variabel $sheet ke dalam array data yang nantinya akan di kirim ke file form.php
				// Variabel $sheet tersebut berisi data-data yang sudah diinput di dalam excel yang sudha di upload sebelumnya
				$data['sheet'] = $sheet; 
			}else{ // Jika proses upload gagal
				$data['upload_error'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
			}
		}
		$this->load->view('backend/header');
		$this->load->view('backend/sidebar');
		$this->load->view('backend/topbar');
		$this->load->view('admin/form', $data);
		$this->load->view('backend/footer');
		
	}
	
	public function import(){
		if(! $this->session->userdata('username'))
		{
			redirect('user/login');
		}
		// Load plugin PHPExcel nya
		include APPPATH.'third_party/PHPExcel/PHPExcel.php';
		
		$excelreader = new PHPExcel_Reader_Excel2007();
		$loadexcel = $excelreader->load('excel/'.$this->filename.'.xlsx'); // Load file yang telah diupload ke folder excel
		$sheet = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);
		
		// Buat sebuah variabel array untuk menampung array data yg akan kita insert ke database
		$data = array();
		
		$numrow = 1;
		foreach($sheet as $row){
			// Cek $numrow apakah lebih dari 1
			// Artinya karena baris pertama adalah nama-nama kolom
			// Jadi dilewat saja, tidak usah diimport
			if($numrow > 1){
				// Kita push (add) array data ke variabel data
				array_push($data, array(
					'username'=>$row['A'], // Insert data nis dari kolom A di excel
					'password'=>$row['B'], // Insert data nama dari kolom B di excel
					'nm_siswa'=>$row['C'], // Insert data jenis kelamin dari kolom C di excel
					'jk'=>$row['D'],
					'kd_kelas'=>$row['E'], // Insert data alamat dari kolom D di excel
					'hadir'=>$row['F'], // Insert data alamat dari kolom D di excel
				));
			}
			
			$numrow++; // Tambah 1 setiap kali looping
		}

		// Panggil fungsi insert_multiple yg telah kita buat sebelumnya di model
		$this->User_Model->insert_multiple($data);
		
		redirect("admin/datadpt"); // Redirect ke halaman awal (ke controller siswa fungsi index)
	}



}
?>
