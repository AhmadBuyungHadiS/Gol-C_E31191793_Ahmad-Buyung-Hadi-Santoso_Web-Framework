<?php  
 
 class Laptop {

 	public $pemilik,
 		   $merk;

 	public function hidupkan_laptop() {
 		return "Hidupkan laptop " . $this->merk . " punya " . $this->pemilik;
 	}

 	public function matikan_laptop() {
 		return "Matikan laptop " . $this->merk . " punya " . $this->pemilik;
 	}

 	public function restart_laptop() {
 		$str = "Matikan laptop " . $this->merk . " punya " . $this->pemilik . " Hidupkan laptop " . $this->merk . " punya " . $this->pemilik;
 		return $str;
 	}

 	public function __construct( $merk = "Merk", $pemilik = "Pemilik") {
 		$this->merk = $merk;
 		$this->pemilik = $pemilik;
 	}
 }

$asus = new Laptop("Asus","A");
echo $asus->hidupkan_laptop(), "<br>";
$acer = new Laptop("Acer","B");
echo $acer->matikan_laptop(), "<br>";
$lenovo = new Laptop("Lenovo","C");
echo $lenovo->restart_laptop(), "<br>";





?>