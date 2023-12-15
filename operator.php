<?php
	
	# syntax
	echo "<h1>Hello, This Is php</h1>";

	$a = 30;
	$b = 10;
	
	// Arithematic Operators
	echo "<h2>Arithmetic Operators</h2>";
	$c = 'Addition is ::'.$a + $b ;
	$d = '<br>Substractionn ::'.$a - $b ; 
	$e = '<br>Multiplication : '.$a * $b ;
	$f = '<br>Division : '.$a / $b ;
	$g = '<br>Modulo : '.$a % $b ; 
	$h = '<br>Exponential : '.$a ** $b ;
	echo $c ; 
	echo $d;
	echo $e;
	echo $f;
	echo $g;
	echo $h;

	# Assignment Operator
	echo "<h2>Assignment Operator</h2>";
	$x = $a;
	echo '<br>Assign : '.$x;

	$a += $b;
	echo '<br>Add then Assign : '.$a;

	$a -= $b;
	echo '<br>Substract then Assign : '.$a;

	$a *= $b;
	echo '<br>Multiply then Assign : ',$a;

	$a /= $b;
	echo '<br>Division then Assign : ',$a;

	$a %= $b;
	echo '<br>Division Reminder : ',$a;


?>