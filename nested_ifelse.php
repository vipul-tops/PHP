<?php
	$a = 50;
	$b = 20;
	$c = 25;

	if ($a < $b){
		if ($a < $c){
			echo "$a is less than $b and $c";
		}
	}else if($b < $c){
		echo "$b is less than $a and $c";
	}
	else{
		echo "$c is less than $a and $b";
	}
?>