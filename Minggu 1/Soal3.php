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

	public function hargaSecond() {
        $harga = $this->harga;
        if( $this->tahunpembuatan > 2010 ){
            $harga = $harga * 0.8;
        } elseif ( $this->tahunpembuatan >= 2005 && $this->tahunpembuatan <= 2010) {
            $harga = $harga * 0.7;
        } else {
            $harga = $harga * 0.6;
        }
        return $harga;
    }

    public function infoKendaraan() {
        $str = "Jenis : {$this -> jeniskendaraan} | Jumlah Roda : {$this -> jumlahroda} | Merk : {$this -> merk} | Bahan Bakar : {$this -> bahanbakar} | Harga : Rp ".number_format($this -> harga, 0, ",", ".")." | Tahun Pembuatan : {$this -> tahunpembuatan}";
        return $str;
    }

    public function infoHargaSecond() {
        $str = "Harga Second : Rp ".number_format($this->hargaSecond(), 0, ",", ".");
        return $str;
    }
}

//Instance

$Motor = new Kendaraan( "Motor", 2, "Yamaha", "Premium", 9000000, 1995);
	echo "Apakah mendapat subsidi : " .$Motor->subsidi(), "<br>";
	echo $Motor->infoKendaraan(), "<br>";
	echo $Motor->infoHargaSecond(), "<br><hr>";
$Mobil = new Kendaraan( "Mobil", 4, "Mercedes Benz", "Pertamax", 900000000, 2015);
	echo "Apakah mendapat subsidi : " .$Mobil->subsidi(), "<br>";
	echo $Mobil->infoKendaraan(), "<br>";
	echo $Mobil->infoHargaSecond(), "<br><hr>";
$Truk = new Kendaraan( "Truk", 8, "Hino", "Diesel", 850000000, 2005);
	echo "Apakah mendapat subsidi : " .$Truk->subsidi(), "<br>";
	echo $Truk->infoKendaraan(), "<br>";
	echo $Truk->infoHargaSecond(), "<br>";
?>