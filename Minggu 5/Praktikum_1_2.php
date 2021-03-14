<?php  

include("Praktikum_1_1.php");

class miniCar implements Car {

	private $model;

	public function setModel($name) {
		$this -> model = $name;
	}

	public function getModel() {
		return $this->model;
	}
}

$car1 = new miniCar();
$car1 -> setModel("Multi-Purpose Vehicle");
$car2 = new miniCar();
$car2 -> setModel("Sedan");
$car3 = new miniCar();
$car3 -> setModel("Hatchback");


echo $car1->getModel(), "<br>";
echo $car2->getModel(), "<br>";
echo $car3->getModel(), "<br>";


?>