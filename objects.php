<?php

	//first object and class

	$object = new User;
	print_r($object); echo "<br>";

	class User {
		public $name, $password;

		function save_user() {
			echo "Save User code goes here";
		}
	}

	//create an instance of a class
	$object_2 = new User();
	print_r($object_2); echo "<br>";

	//accessing object properties
	$object_3 = new User();
	$object_3->name = "Chaunte";
	$object_3->password = "Mozart";
	print_r($object_3); echo "<br>";

?>