<?php

	//build in functions
	echo "reversed string: ";
	echo strrev('hello world');
	echo "<br>";
	echo "repeat this string: ";
	echo str_repeat("hello ", 5);
	echo "<br>";
	echo "Transform to uppercase: ";
	echo strtoupper("hello, world!");
	echo "<br>";

	//first function
	function format_name($first, $middle, $last)
	{
		$first = ucfirst(strtolower($first));
		$middle = ucfirst(strtolower($middle));
		$last = ucfirst(strtolower($last));

		return $first . " " . $middle . " " . $last;
	}

	echo format_name('walter', 'ChaUnte', 'vandeburgh');
	echo "<br>";

	//first funtion with array
	function format_name_array($first, $middle, $last)
	{
		$first = ucfirst(strtolower($first));
		$middle = ucfirst(strtolower($middle));
		$last = ucfirst(strtolower($last));

		return array($first, $middle, $last);
	}

	$names = format_name_array('wAlter', 'chaunte', 'vandEburgh');

	echo $names[0] . ' ' . $names[1] . ' ' . $names[2];

	echo "<br>";

	//passing values to a function by reference
	$p1 = 'earth';
	$p2 = 'mars';
	$p3 = 'venus';

	function format_name_thread(&$ap1, &$ap2, &$ap3)
	{
		$ap1 = ucfirst(strtolower($ap1));
		$ap2 = ucfirst(strtolower($ap2));
		$ap3 = ucfirst(strtolower($ap3));
	}

	echo $p1 . ' ' . $p2 . ' ' . $p3;
	echo "<br>"; 

	format_name_thread($p1, $p2, $p3);

	echo "<br>";
	echo $p1 . ' ' . $p2 . ' ' . $p3;
	echo "<br>";

	//global variables
	$g1 = 'house';
	$g2 = 'car';
	$g3 = 'gym';

	function global_format() {
		global $g1; $g1 = ucfirst(strtolower($g1));
		global $g2; $g2 = ucfirst(strtolower($g2));
		global $g3; $g3 = ucfirst(strtolower($g3));		
	}

	echo $g1 . ' ' . $g2 . ' ' . $g3;
	echo '<br>';
	echo global_format();
	echo $g1 . ' ' . $g2 . ' ' . $g3;
	echo '<br>';

	//function exist

	if (function_exists(global_format)){
		echo "function exists";
		echo "<br>";
	} else {
		echo "function doesn't exist";
	}

	echo phpversion();

?>