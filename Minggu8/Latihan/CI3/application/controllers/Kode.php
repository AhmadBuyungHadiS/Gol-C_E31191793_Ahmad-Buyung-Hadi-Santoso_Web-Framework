<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Kode extends CI_Controller {

	public function hello($var) {
		if (isset($var)) {
			switch(strtolower($var)) {
				case 'php':
				$this->load->view('phpview');
				break;

				case 'python' :
				$this->load->view('pythonview');
				break;

				case 'cpp' :
				$this->load->view('cppview');
				break;

				case 'java' :
				$this->load->view('javaview');
				break;

				default :
					echo 'Input URI salah';
			}

			}

			else {
				echo 'Input URI Salah';
		}
	}
}

?>