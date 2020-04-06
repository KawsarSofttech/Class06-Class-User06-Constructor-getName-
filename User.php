<?php

class User{
	public $name;

	public function __construct($name)
	{
		$this->name = $name;
	}

	public function getName()
	{
		echo $this->name;
	}
	public function greet()
	{
		echo "Welcome to OOP";
	}

}

$admin = new User("Boltu Bhaiiiiiiiiiiiiii");
$admin->getName();


?>