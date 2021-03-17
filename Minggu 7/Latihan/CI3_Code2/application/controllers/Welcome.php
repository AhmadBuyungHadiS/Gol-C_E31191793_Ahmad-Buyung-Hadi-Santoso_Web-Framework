<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function profil() {
		//Perintah untuk load file view dengan nama profil.php
		$this->load->view('profil');
	}

	public function contact() {
		//Perintah untuk load file view dengan nama contact.php
		$this->load->view('contact');
	}

	public function hilangIndex() {
		$this->load->view('tanpaIndex');
	}

	public function Demo_view() {
		$this->load->view('headerView');
		$this->load->view('contentView');
		$this->load->view('footerView');
	}
}
