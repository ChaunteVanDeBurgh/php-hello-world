<?php
	/* 
		Hello World
	*/
	$variable = "Hello,";
	$variable_space = " ";
	$variable_1 = "World!";
	$mycounter = 1;
	$myarray = array("One", "Two", "Three");

	echo $variable;
	echo $variable_space; //prints text
	echo $variable_1;
	echo "<br>";
	echo $myarray[1];
	echo "<br>";
	echo $mycounter;
	echo "<br>";

	//tic tac toe
	//multi dementional arrays
  $oxo = array(array('x', ' ', 'o'),
				 			 array('o', 'o', 'x'),
				 			 array('x', 'o',' '));

	echo $oxo[1][2];
	echo "<br>";

	// Aritihmatic
	$exponent = 5 ** 3;
	echo $exponent;
	echo "<br>";

	// assignment operator 
	$i = 5;
	$i += 4;
	$i -= 2;

  //concot assignment operator 
	$ao = 10;
	$ao .= 4; 

	echo "<br>";
	echo $ao;
	echo "<br>";
	echo $i;
	echo "<br>";

	//logic
	$_xor = 3 + 4 == 6 || 3 + 3 == 7;

	echo $_xor;
	echo "<br>";

	//variable incrementing and decrementing

	$num = 4; 
	++$num;
	--$num;
	--$num;
	echo $num;
	echo "<br>";

	//conditionals
	if ($num++ == 3) echo "True_3";
	echo "<br>";

	//string concatenation
	$msgs = 5;
	echo "You have " . $msgs . " new messages.";
	echo "<br>";

?>