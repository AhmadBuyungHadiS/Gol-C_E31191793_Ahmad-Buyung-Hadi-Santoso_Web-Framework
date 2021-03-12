<?php  

class Handphone {

	public $merk,
		   $harga,
		   $tipe,
		   $ukuran_ram,
		   $ukuran_rom;


	public function __construct($merk = "Merk", $harga = "Harga Handphone", $tipe = "Tipe Handphone", $ukuran_ram = "Ukuran Ram", $ukuran_rom= "Ukuran Rom") {
        $this->merk = $merk;
        $this->harga = $harga;
        $this->tipe= $tipe;
        $this->ukuran_ram = $ukuran_ram;
        $this->ukuran_rom = $ukuran_rom;
    }

	public function infoMerk() {
		$merk = $this -> merk;
		return $merk;
	}

	public function specialPrice() {
		$harga = $this -> harga;
		if ( $this->harga >= 20000000) {
			$harga = $harga * 95 / 100;
		}

		return $harga;
	}

	public function dataHp() {
		$str = "Merk : {$this -> merk} | Harga : Rp ".number_format($this -> harga, 0, ",", ".")." | Tipe : {$this -> tipe} | Ukuran Ram : {$this -> ukuran_ram} GB | Ukuran Rom : {$this -> ukuran_rom} GB |";
        return $str;
	}
}

$Samsung = new Handphone("Samsung", 21000000, "S21 Ultra", 16, 258 );
echo $Samsung -> dataHp(), "<br>";
echo $Samsung -> infoMerk(), "<br>";
echo $Samsung -> specialPrice();

	




?>