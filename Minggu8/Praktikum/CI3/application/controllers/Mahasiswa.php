<?php 

defined('BASEPATH') OR exit ('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	/*public function __construct() {
		parent::__construct();
		$this->load->model('Mahasiswa_model');
	}*/

	public function index() {
		$data['nama'] = "Kim Jefry";
		$data['prodi'] = "MIF";
		$this->load->view('view_Mahasiswa',$data);
	}

	public function profil() {
		echo"Ini adalah method profil pada controller Mahasiswa";
	}

}

?>