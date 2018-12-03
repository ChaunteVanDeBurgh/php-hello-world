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

?>