<?php

	$x = '1';
	$b = &$x;
	$b = "2$b";

	echo $x. "," .$b;

?>