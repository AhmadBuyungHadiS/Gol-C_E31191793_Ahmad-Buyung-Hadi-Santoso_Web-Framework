<?php  

class Car {

	//private methods & properties
	private $model = "Mercedes Benz";


	public function getModel() {
		return "The car model is " .$this->model;
	}
}
$mercedes = new Car();
//Akses property dari luar class
//$mercedes -> model = "Mercedes Benz";
echo $mercedes -> getModel();

?>