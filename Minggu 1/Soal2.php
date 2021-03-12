<?php  
//Latihan No.2
class Kendaraan {

	//Properties
	public $jeniskendaraan;
	public $jumlahroda;
	public $merk;
	public $bahanbakar;
	public $harga;
	public $tahunpembuatan;

	public function __construct($jeniskendaraan = "Jenis Kendaraan", $jumlahroda = 0, $merk = "Merk Kendaraan", $bahanbakar = "Bahan Bakar Kendaraan", $harga = "Harga Kendaraan", $tahunpembuatan = 0) {
        $this->jeniskendaraan = $jeniskendaraan;
        $this->jumlahroda = $jumlahroda;
        $this->merk = $merk;
        $this->bahanbakar = $bahanbakar;
        $this->harga = $harga;
        $this->tahunpembuatan = $tahunpembuatan;
    }

	public function subsidi() {
		if ( $this -> bahanbakar == "Premium" && $this -> tahunpembuatan <= 2005 ) {
			return "Ya";
		} return "Tidak";
	}
}
//Instance

$Motor = new Kendaraan( "Motor", 2, "Yamaha", "Premium", 9000000, 1995);
	echo $Motor->subsidi(), "<br>";
	echo $Motor->hargaSecond(), "<br>";
$Mobil = new Kendaraan( "Mobil", 4, "Mercedes Benz", "Pertamax", 900000000, 2015);
	echo $Mobil->subsidi(), "<br>";
	echo $Mobil->hargaSecond(), "<br>";
$Truk = new Kendaraan( "Truk", 8, "Hino", "Diesel", 850000000, 2005);
	echo $Truk->subsidi(), "<br>";
	echo $Truk->hargaSecond(), "<br>";

?>