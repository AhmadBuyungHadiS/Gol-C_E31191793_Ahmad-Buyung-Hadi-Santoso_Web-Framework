<?php  

include ("Praktikum_2_1.php");
include ("Praktikum_2_2.php");

class Rectangle implements Shape {
	private $width;
	private $height;

	public function __construct ($width, $height) {
		$this-> width = $width;
		$this-> height = $height;
	}

	//calcArea calculates the area of rectangel
	public function calcArea() {
		return $this->width * $this->height;
	}
}

$circ = new Circle(3);
$rect = new Rectangle(3,4);

echo "Luas lingkaran : " .$circ -> calcArea(), "<br>";
echo "Luas persegi panjang : " .$rect -> calcArea();

?>