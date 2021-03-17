<?php  

class Soal_3 extends CI_Controller {
	public function index() {
		
		//c3 - membuat model "Soal3"
		$this->load->model('modelSoal_3');

		//Pengambilan objek dari kelas Hello_model dan dimuat di var $model
		$model = $this->modelSoal_3;

		//Mengambil data dari model 
		$b = $model->txt;

		//Membuat data yang akan dikirim ke view
		$data['teks'] = $b;

		//memanggil file view 
		$this->load->view('viewSoal_3', $data); //file view
	}
}

?>