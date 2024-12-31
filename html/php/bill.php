<?php
	$unit=$_POST['unit'];
	$tariff=5;
	$bill=$unit*$tariff;
	echo "Electity Bill<br>";
	echo "unit consumed:".$unit."KWh<br>";
	echo "Tariff rate :".number_format($tariff,2)."per kWh<br>";
	echo "Total cost:".number_format($bill,2);
?> 