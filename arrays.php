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
		//numeric array

	$pages = array('one', 'two', 'three', 'four');

	echo $pages[1];
	echo "<br>";

	//associative array

	$pages2 = array(
		'printer' => "lazer",
		'cat' => "dog"
	);

	echo $pages2['cat'];
	echo "<br>";

	//for each loop
	foreach($pages as $item) {
		echo "$item" . "<br>";
	};

	//for each with associative array
	foreach($pages2 as $items => $values) {
		echo "$items: $values.<br>";
	};

	//looping an associative array with each //and list
	while (list($item, $description) = each($paper))
		echo "$item: $description<br>";


?>