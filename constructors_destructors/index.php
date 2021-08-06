<!-- 
	working with destructor
 -->
<?php include "inc/header.php"; ?>


<?php

class UserData{

	public $user;
	public $userId;

	public function __construct($userName, $userId)
	{
		$this->user = $userName;
		$this->userId = $userId;

		echo "User name is {$this->user} and user id is {$this->userId}";
	}

	public function __destruct()
	{
		unset($this->user);
		unset($this->userId);

	}
}

$user = "Ali";
$id = "21";
$ur = new UserData($user,$id);

?>


<?php include "inc/footer.php"; ?>