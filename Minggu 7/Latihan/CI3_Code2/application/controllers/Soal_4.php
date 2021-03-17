<?php  

class Soal_4 extends CI_Controller {
	public function index() {
		
		//c3 - membuat model "modelSoal_4"
		$this->load->model('modelSoal_4');

		//Pengambilan objek dari kelas Hello_model dan dimuat di var $model
		$model = $this->modelSoal_4;

		//Mengambil data dari model 
		$c = $model->txt1;
		$d = $model->txt2;

		//Membuat data yang akan dikirim ke view
		$data = array('var1' => $c,
				      'var2' => $d
		);

		//memanggil file view 
		$this->load->view('viewSoal_4', $data); //file view
	}
}

?>