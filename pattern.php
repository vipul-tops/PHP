<?php

	$a = 10;

	for ($i = 1; $i <=10; $i++){
		for ($j = 1; $j <= $i; $j++){
			echo " * ";
		}
		echo "<br>";
	}

	echo "<br><br>";

	for ($i = 1; $i <= 10; $i++){
		for ($j = $i; $j <= 10; $j++){
			echo " * ";
		}
		echo "<br>";
	}

?>