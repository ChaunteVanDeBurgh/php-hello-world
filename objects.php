<?php
	//first object and class
	$object = new User();
	print_r($object); echo "<br>";

	//create an instance of a class
	$object_2 = new User();
	print_r($object_2); echo "<br>";

	//accessing object properties
	$object_3 = new User();
	$object_3->name = "Chaunte";
	$object_3->password = "Mozart";
	print_r($object_3); echo "<br>";

	//accessing object method
	$object->save_user();

	//object cloning
	$object_4 = clone $object_3;
	$object_4->password = "vivaldi";
	print_r($object_4); echo "<br>";

	// $this
	echo $object_4->get_password();
	echo "<br>";

	//implicit property decloration
	$object_5 = new User;
	$object_5->nickname = 'chaz';
	print_r($object_5); echo "<br>";

	//constants
	AlphaNum::encode();

	//testing subscriber class inheritance
	$object_6 = new Subscriber;
	$object_6->email = "helloworldemail";
	$object_6->phone = "6666666666";
	$object_6->display();

	class User {
		public $name = "User";
		public $password = "Password";

		function save_user() {
			echo "Save User code goes here";
		}

		function get_password() {
			return $this->password;
		}
	}

	//constant's class

	class AlphaNum {
		const A = 1;
		const B = 2;
		const C = 3;

		static function encode() {
			echo self::A;
			echo "<br>";
		}
	}

	//using extends for class inheratence

	class Subscriber extends User {
		public $email, $phone;

		function display(){
			echo "Name: " . $this->name; echo "<br>";
			echo "Password: " . $this->password; echo "<br>";
			echo "Email: " . $this->email; echo "<br>";
			echo "Phone: " . $this->phone; echo "<br>";
		}
	}
?>