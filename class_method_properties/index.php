<?php include "inc/header.php"; ?>
<?php include "function.php"; ?>


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

$personone->personAge(' 18<br>');


?>
<hr>

<!-- 2nd part -->
<form action="" method="POST">
	<table>
		<tr>
			<td>Enter the first number :</td>
			<td><input type="number" name="num1"></td>
		</tr>
		<tr>
			<td>Enter the 2nd number :</td>
			<td><input type="number" name="num2"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="calculation" value="calculate"></td>
		</tr>
	</table>
</form>
<?php 
if(isset($_POST['calculation']))
{
	$numOne = $_POST['num1'];
	$numTwo = $_POST['num2'];

	if(empty($numOne) || empty($numTwo))
	{
		echo "<span style='color:red'>Faild mus not be empty</span>";
	}else{
		echo "First number is :".$numOne." "." And Second number is: " .$numTwo."<br>";
	$cal = new Calculation;
	$cal->add($numOne,$numTwo);
	$cal->sub($numOne,$numTwo);
	$cal->mul($numOne,$numTwo);
	$cal->div($numOne,$numTwo);
	}

}
?>
		













<?php include "inc/footer.php"; ?>