<?php

	//printf
	//decimal
	printf("Hello, %d Worlds!", 3);
	echo "<br>";

	//printf binery
	printf("Hello, %b Worlds in binery", 3);
	echo "<br>";

	//printf hex multiple arguments
	printf("<span style='color:#%X%X%X'>Hello, World!</span>", 67,125, 245);
	echo "<br>";

	//precision setting
	printf("Three divided by ten is %.2f", 10 / 3);
	echo "<br>";

	//enable viewing of the spaces
	echo "<pre>";

	//Pad to 15 spaces
	printf("The result is $%15f\n", 123.42 / 12);
	echo "<br>";

	// Pad to 15 apces, fill with zeros
	printf("The result is $%15\n", 123.42 / 12);
	echo "<br>";

	//Pad to 15 spaces, 2 decimal places precision
	printf("The result is $%15.2f\n", 123.42 / 12);

	//Pad to 15 spaces 2 decimal places presision, fill with zeros
	printf("The result is $%015.2f\n", 123.42 / 12);

	// Pad to 15 spaces, 2 decimal places precision, fill with # symbol
	printf("The result is $%'#15.2f\n", 123.42 / 12);
	echo "<br>";

	//The original creator of PHP
	$h = 'Rasmus';

	//standard string output
	printf("[%s]\n",         $h);

	//twelve spaces
	printf("[%12s]\n",       $h);

	//twelve spaces from left
	printf("[%-12s]\n",      $h); 

	//Padwith zeros
	printf("[%012s]\n",      $h);

	//Use the custom padding charecter
	printf("[%'#12s]\n\n",   $h);

	//creater of PHP
	$d = 'Rasmus Lerdorf';

	//Right justify, cutoff of 8 charecters
	printf("[%12.8s]\n",     $d);

	//Lefft Justify, cutoff of 12 charecters 
	printf("[%-12.12s]\n",    $d);

	//left justify, pade with '@', cut off 10chars
	printf("[%-'@12.10s]\n",   $d);

	//sprintf
	$hexstring = sprintf("%X%X%X", 65, 127, 240);

	$out = sprintf("The result is: $%.2f", 10 / 3);
	echo $out;
	echo "<br>";

	//time functions
	echo time();

	echo "<br>";

	echo date("d n y", time());

	echo "<br>";

  if (checkdate(04,06,1991)) echo "Date is valid";
  else echo "Date is invalid";
	echo "<br>";

	//file handling

	if (file_exists("sandbox.php")) echo "file exists";
	echo "<br>";

	$made_file = fopen("madefile.txt", 'w') or die('did not create file');

	$text = <<<__END
	line 1
	line 2
	line 3
__END;

	fwrite($made_file, $text) or die("Could not write to file");
	fclose($made_file);
	echo "File 'madefile.txt' written successfully";
	echo "<br>";

	//reading a file with fgets()
	$madefile2 = fopen('madefile2.txt', 'r');
	$line = fgets($madefile2);
	fclose($madefile2);
	echo $line;
	echo "<br>";

?>