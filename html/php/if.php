<?php
	$score= $_POST["mark"];
	if($score>=90){
		echo "grade A";
	}
	elseif($score>=70){
		echo "grade B";
	}
	else{
		echo "grade c";
	}
?>
