<?php
	$name=["Alice","Bob","Charle","Diana","Eve"];
	echo "Organized array<br>";
	print_r($name);
	echo "<br><br>";
	echo "Array in ascending order<br>";
	asort($name);
	print_r($name);
	echo "<br>Array in descending order<br>";
	arsort($name);
	print_r($name);
?> 