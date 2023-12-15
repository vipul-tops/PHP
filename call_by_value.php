<?php

	function swap_value(&$a,&$b){
		$c = $a;
		$a = $b;
		$b = $c;
	}

	$x = 10;
	$y = 20;

	echo '<h3>';
	echo "Before Calling Function Value of X:- ".$x." and Y:- ".$y;
	echo '<br>';
	swap_value($x,$y);
	echo "After Calling Function Value of X:- ".$x." and Y:- ".$y;
	echo '</h3>';

?>