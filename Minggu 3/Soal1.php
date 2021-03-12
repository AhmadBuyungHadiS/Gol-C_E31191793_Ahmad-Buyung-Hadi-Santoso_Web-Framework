<?php  

class Calculator {

	private $angka1 = 5;
	private $angka2 = 6;
	private $angka3 = 11;


	public function tambah() {
		$hasil = $this->angka1 + $this->angka2 + $this->angka3;
		return $hasil;
	}

	public function kurang() {
		$hasil = $this->angka1 - $this->angka2 - $this->angka3;
		return $hasil;
	}

	public function kali() {
		$hasil = $this->angka1 * $this->angka2 * $this->angka3;
		return $hasil;
	}

	public function bagi() {
		$hasil = $this->angka1 / $this->angka2 / $this->angka3;
		return $hasil;
	}
}

$hasiltambah = new Calculator();
echo "Hasil tambah : " .$hasiltambah->tambah(), "<br>";
$hasilkurang = new Calculator();
echo "Hasil kurang : " .$hasilkurang->kurang(), "<br>";
$hasilkali = new Calculator();
echo "Hasil kali : " .$hasilkali->kali(), "<br>";
$hasilbagi = new Calculator();
echo "Hasil bagi : " .$hasilbagi->bagi();

?>