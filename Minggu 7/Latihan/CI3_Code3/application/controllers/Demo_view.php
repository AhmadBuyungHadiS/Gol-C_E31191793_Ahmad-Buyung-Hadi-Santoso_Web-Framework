<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Demo_view extends CI_Controller {
	//Soal 2 Kode 1
	public function index() {
		$this->load->view('headerView');
		$this->load->view('contentView');
		$this->load->view('footerView');
	}
}



?>