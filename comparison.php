<?php

	$a = 10;
	$b = 10;
	$c = 20;
	$d = '10';

	echo '<h1>Comparison Operators</h1>';

	echo '<br>Equal : ', $a == $b ;
	echo '<br>Equal : ', $a == $b ;
	echo '<br>Identical : ', $b === $b ;
	var_dump($b === $b);
	echo '<br>Identical : ', $a === $d ;
	var_dump($a === $d);

	echo '<br>Not Identical : ', $a !== $c ;
	echo '<br> Not Equal : ', $a <> $c ; 
	echo '<br>Less Than : ', $a < $c;
	echo '<br>Greater Than : ', $c > $a;
	echo '<br>Spaceship : ', $a <=> $c ,'<br>';

	var_dump($a == $d);

	// logical operator

	echo '<h1> Logical Operator </h1>';

	echo '<br> And : ', $a and $b;
	var_dump($a and $b);

	echo '<br> Or : ', $a or $b;

	echo '<br> Not : ', !$a ;

	// concatenation operator

	echo '<h1>Concatenation Operator</h2>';

	$x = 'Vipul ';
	$y = 'Memakiya';
	echo '<br> Concatenation : ', $x.$y;
	echo '<br>';
	var_dump($x.$y);


?>