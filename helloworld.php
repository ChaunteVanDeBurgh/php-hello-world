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

	//string interpolation
	echo 'You have $msgs new messages';
	echo "<br>";
	echo "You have $msgs new messages";
	echo "<br>";

	//escape charecters
	echo 'you\'re allright';
	echo "<br>";
	echo "She wrote \"return to sender\" on it.";
	echo "<br>";
	//ones that only work in double quotes
	echo "\tHello\n\tWorld";
	echo "<br>";
	echo "\tHello\r\tWorld";
	echo "<br>";

	//sub string method
	$my_string = "come said my soul";
	echo substr($my_string, 5, 4);
	echo "<br>";

	//constants
	define("ROOT", "hello/world/");
	echo ROOT;
	echo "<br>";

	echo __LINE__;
	echo "<br>";
	echo __FILE__;
	echo "<br>";
	echo __DIR__;
	echo "<br>";
	echo __FUNCTION__;
	echo "<br>";
	echo __CLASS__;
	echo "<br>";
	echo __METHOD__;
	echo "<br>";
	echo __NAMESPACE__;
	echo "<br>";

	//print turnary
	$b = True;
	$b ? print "TRUE" : print "FALSE";
	echo "<br>";

	//function

	function helloworld($num)
	{
		return "hello " . $num . " worlds";
	}

	echo helloworld(4);
	echo "<br>";

	//super global variables
	$came_from = htmlentities($_SERVER['HTTP_REFERER']);
	echo $came_from;
	echo "<br>";

	//expression
	$exp = 5 + abs(3-8);
	echo $exp;
	echo "<br>";

	//Boolean expressions

	echo "A: [" . true . "] <br>";
	echo "B: [" . false . "] <br>";
	echo "<br>";
	echo "20 > 7 " . (20 > 7) . " <br>";
	echo "<br>";

	//if statement
	$month = "dec";

	if ($month == "dec") {
		echo "Christmas time is coming, this month";
		echo "<br>";
	}

	//comparison operators

	$q = 4;
	$u = 4;
	$s = 5;

	if ($q <= $u) echo "$q is less than or equal to $u";
	echo "<br>";
	if ($q >= $u ) echo "$q is greater than or equal to $u";
	echo "<br>";
	if ($u < $s) echo "$u is less then $s";
	echo "<br>";
	if ($s > $u) echo "$s is greater than $u";
	echo "<br>";
	if ($q == $u) echo "$q is equivilant to $u";
	echo "<br>";

	//if else statement
	$i = 4;

	if ($i == 3) {
		echo "i is equal to 3"; 
		echo "<br>";
	} else {
		echo "i is not equla to 3 ";
		echo 'it\'s probably 4';
		echo "<br>";
	}

	// else if statement
	if ($i == 3) {
		echo "i is equal to 3"; 
		echo "<br>";
	} elseif ($i == 4) {
		echo "i is equal to 4";
		echo "<br>";
	} else {
		echo "idk what i is";
		echo "<br>";
	}

	//switch statement
	$page = "shopping";

	switch ($page) {
		case "home":
			echo "you're at home";
			break;
		case "about":
			echo "the about page";
			break;
		case "faq":
			echo "frequently asked questions";
			break;
		case "contact":
			echo "contact us";
			break;
		default:
			echo "page not recognized";
			break;
	}	

	echo "<br>";

	//inline turnary
	echo $page == "shopping" ? "we're going shopping" : "we're not going shopping";
 
 echo "<br>";

	//while loop
	$count = 0;

	while (++$count <= 12) {
		echo "$count times 12 is " . 12 * $count . "." . "<br>";
	}

	//do while loop
	$ii = 1;

	do {
		echo "$ii times 10 is " . $ii * 10 . "." . "<br>";
	} while (++$ii <= 10);

	//for loop
	for ($g = 1; $g < 11; $g++) {
		echo "$g time 9 is " . $g * 9 . ".";
		echo "<br>";
	}

?>