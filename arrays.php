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

	//list
	list($a, $b) = array('Allice', 'Bob');
	echo "a=$a b=$b";
	echo "<br>";

	//multi dementional arrays
	$goals = array(
		'music' => array(
			'video' => 'jam-no-1',
			'pictures' => 'guitar-pose'
		),
		'programming' => array(
			'site1' => 'elementuse',
			'site2' => 'chauntevan'
		),
		'hibatchi' => array(
			'video1' => 'knife show',
			'video2' => 'fork and spatula'
		)
	);

	//foreach...as looping multidementional array

	foreach($goals as $item => $goal_items) {
		foreach($goal_items as $items => $description) {
			echo "$description <br>";
		};
	};

	echo $goals['music']['video'];

	//chess with multi dementional array
	$chessboard = array(    
		array('r', 'n', 'b', 'q', 'k', 'b', 'n', 'r'),    
		array('p', 'p', 'p', 'p', 'p', 'p', 'p', 'p'),    
		array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),    
		array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),    
		array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),    
		array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),    
		array('P', 'P', 'P', 'P', 'P', 'P', 'P', 'P'),    
		array('R', 'N', 'B', 'Q', 'K', 'B', 'N', 'R')  );

	echo "<pre>";

	foreach($chessboard as $row) {
		foreach($row as $piece) {
			echo $piece;
		}
		echo "<br>";
	}


	echo "<pre>";
	echo "<br>";

	//built in array functions
	//is_array()
	echo (is_array($chessboard));
	$var = "int-string";

	echo "<br>";

	echo (is_array($var)) ? "it is an array" : "its not an array";

	echo "<br>";	

	echo (is_array($chessboard)) ? "is an array" : "is not an array";

	echo "<br>";
	
	//count()

	echo count($chessboard);
	echo "<br>";
	echo count($chessboard, 1);
	echo "<br>";

	$numbers = array(1,4,3,5,2,6);
	print_r($numbers);

	//sort()

	sort($numbers);
	print_r($numbers);

	//sort(' ', SORT_STRING)

	$letters = array('c','b','a','d','e','f');

	sort($letters, SORT_STRING);
	print_r($letters);

	//shuffle
	shuffle($letters);
	print_r($letters);

	//reset
	reset($letters); 
	print_r($letters);


	//explode()
	$boom = explode(' ', "Hello, Wrold. My Name is Human");

	print_r($boom);

	echo "<br>";

	//extract()
	extract($printer);
	echo $copier;

	echo "<br>";

	//ectract() with prefix

	extract($printer, EXTR_PREFIX_ALL, 'fromprinter');
	echo $fromprinter_copier;
	echo "<br>";

	//compact()
	$fname         = "Doctor";
  $sname         = "Who";
  $planet        = "Gallifrey";
  $system        = "Gridlock";
  $constellation = "Kasterborous";

  $contact = compact('fname', 'sname', 'planet', 'system', 'constellation');

  print_r($contact);

  //reset()
  echo reset($letters);

  //end()
  echo end($letters);
?>