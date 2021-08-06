<!-- 
	working with destructor
 -->
<?php include "inc/header.php"; ?>


<?php
// Class
class Person{

	// property declare
	public $name; //access modifier "public"
	public $age;
	public $id;

	public function __construct($name,$age)
	{
		$this->name =$name;
		$this->age = $age;
	}
	public function setId($id)
	{
		$this->id = $id;

	}

	// destructor
	public function __destruct()
	{
		if(!empty($this->id)){
			echo "Saving person";
		}
	}

}

// object(instances of class)
$personone = new Person("Rifat Hasan","28");
$personone = $personone->setId(12);

?>

		













<?php include "inc/footer.php"; ?>