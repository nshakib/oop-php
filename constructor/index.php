<!-- 
	value inialize with constructor
 -->
<?php include "inc/header.php"; ?>


<?php
// Class
class Person{

	// property declare
	public $name; //access modifier "public"
	public $age;

	public function __construct($name,$age)
	{
		$this->name =$name;
		$this->age = $age;
	}
	public function PersonDetails()
	{
		echo "Person name  is {$this->name} and person age is {$this->age}";

	}

}

// object(instances of class)
$personone = new Person("Rifat Hasan","28");
$personone = $personone->PersonDetails();

?>

		













<?php include "inc/footer.php"; ?>