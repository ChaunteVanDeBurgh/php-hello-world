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
?>