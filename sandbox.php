<?php

	$made_file_2 = fopen('madefile2.txt', 'w');

	$user_text = "Hello, World!";

	fwrite($made_file_2, $user_text);
	fclose($made_file_2);
	echo "file made!";

?>