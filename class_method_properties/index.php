<?php include "inc/header.php"; ?>


<?php
// Class
class Person{

	// property declare
	public $name; //access modifier "public"
	public $age;

	// method
	public function personName()
	{
		echo "Person name  is ".$this->name."<br>";// if i use variable directly it shows undifined variable. 
		//Using $this keyword indicate declared variable/properties.
		//here "->" object operator

	}

	// method
	public function personAge($value)//here $value is a parameter
	{
		echo "Person age is".$this->age=$value;
	}
}

// object(instances of class)
$personone = new Person();

// access properties
$personone->name="Rakib Hasan";//initialize

//caling method
$personone->personName();

$personone->personAge('18');


?>

		













<?php include "inc/footer.php"; ?>