<?php  

class Variable extends CI_Controller {
	public function index() {
		$data = ['variable1'=>'Data variabel ke - 1', 'variable2'=>'Data variable ke - 2'];

		$this->load->view('variableview', $data);
	}
}

?>