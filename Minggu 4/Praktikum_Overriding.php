<?php
// The parent class has hello method that returns "beep".
class Car
{
    public function hello()
    {
        return "beep";
    }
}

//The child class has hello method that returns "Hallo"
class SportsCar extends Car
{
    public function hello()
    {
        return "Hallo";
    }
}

//Create a new object
$sportsCarl = new SportsCar();

//Get the result of the hello method
echo $sportsCarl->hello();

/* Output jika di jalankan di dalam web browser adalah " Hallo " karena nama method hello() sama antara child class dan parent class maka child class memanggil method hello() yang overriding dari method hello() pada parents class*/
?>
