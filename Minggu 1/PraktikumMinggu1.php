<?php 

// Pelaksanaan Praktikum Minggu 1 

// Declare class 

class Car {

	//Properties 

	public $comp;
	public $color = 'beige';
	public $hasSunRoof = true;

	//method 

	public function hello() {

		return "beep";
	}
} 


//Membuat Instance 
$bmw = new Car();
$mercedes = new Car();

//Get Values 

echo $bmw -> color; // beige 
echo "<br />";
echo $mercedes -> color; //beige
echo "<hr />";

//Set Values

$bmw -> color = 'blue';
$bmw -> comp = "BMW";
$mercedes -> comp = "Mercedes Benz";

//Get Values

echo $bmw -> color; //blue
echo "<br />";
echo $mercedes -> color; //beige
echo "<br />";
echo $bmw -> comp; //BMW
echo "<br />";
echo $mercedes -> comp; //Mercedes Benz
echo "<hr />";

//Method Get a Beep 

echo $bmw -> hello(); //beep
echo "<br />";
echo $mercedes -> hello(); //beep

?>