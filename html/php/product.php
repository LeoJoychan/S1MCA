<?php
	$price=20.50;
	$quantity=3;
	$cost=$price*$quantity;
	echo "Bill<br>";
	echo "Price per item:".number_format($price,2)."<br>";
	echo "Quantity :".number_format($quantity,2)."<br>";
	echo "Total cost:".number_format($cost,2);
?> 