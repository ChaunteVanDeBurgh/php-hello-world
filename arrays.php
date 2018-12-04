<?php 

	$paper[] = "Copier";
	$paper[] = "Inkjet";
	$paper[] = "Laser";
	$paper[] = "Photo";

	for ($i = 0; $i < 4; ++$i)
		echo "$i: $paper[$i]" . "<br>";

?>