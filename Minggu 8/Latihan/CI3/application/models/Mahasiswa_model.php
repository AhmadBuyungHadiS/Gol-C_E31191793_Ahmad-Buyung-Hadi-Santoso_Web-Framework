<?php  

class Mahasiswa_model extends CI_Model {

	public function get_data() {
		$data_mahasiswa = [
		["no"=>"1","nama"=>"Kim Jefry","prodi"=>"MIF"],
		["no"=>"2","nama"=>"Ahmad Kurniawan","prodi"=>"TKK"],
		["no"=>"3","nama"=>"Budi Sudarsono","prodi"=>"TIF"]
		];
		return $data_mahasiswa;
	}

	public function get_data_prodi() {
		$data_prodi = [
		["no"=>"1","prodi"=>"MIF","keterangan"=>"Manajemen Informatika"],
		["no"=>"2","prodi"=>"TKK","keterangan"=>"Teknik Komputer"],
		["no"=>"3","prodi"=>"TIF","keterangan"=>"Teknik Informatika"]
		];
		return $data_prodi;
	}

	public function get_data_angkatan() {
		$data_angkatan = [
		["no"=>"1","tahun"=>"2016"],
		["no"=>"2","tahun"=>"2017"],
		["no"=>"3","tahun"=>"2018"]
		];
		return $data_angkatan;
	}
}
?>