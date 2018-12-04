<?php 

	//numerical array
	$paper[] = "Copier";
	$paper[] = "Inkjet";
	$paper[] = "Laser";
	$paper[] = "Photo";

	//for loop with numberical array
	for ($i = 0; $i < 4; ++$i)
		echo "$i: $paper[$i]" . "<br>";

	//associative array
	$printer['copier'] = "Copier & multipur";
	$printer['inkjet'] = "inkjet printer";
	$printer['laser'] = "Laser Printer";
	$printer['photo'] = "Photographic Paper";

	echo $printer['laser'];
	echo "<br>";

	//array keyword
	$pages = array('one', 'two', 'three', 'four');

	echo $pages[1];
	echo "<br>";

	$pages2 = array(
		'printer' => "lazer",
		'cat' => "dog"
	);

	echo $pages2['cat'];
	echo "<br>";

?>