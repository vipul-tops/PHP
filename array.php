<?php

	$car = ['Suzuki','Honda', 'Audi', 'Hyundai', 'TATA', 'Mahindra'];

	echo '<pre>';
	echo '==========Count==========<br>';
	print_r($car);
	echo '<br>';
	print_r(count($car));
	echo '<br>';
	print_r(sizeof($car));

	// Implode
	echo '<br>';
	echo '==========Implode==========<br>';
	print_r(implode(' | ', $car));
	
	// Explode
	echo '<br>';
	echo '==========Explode==========<br>';
	$car_str = (implode(' | ',$car));
	print_r(explode(' | ', $car_str));

	// range
	echo '<br>==========Range==========<br>';
	print_r(range(1, 10));
	print_r(range('a', 'g'));

	// array_slice

	echo '<br>==========array_slice==========<br>';
	print_r(array_slice($car, 0,2));
	print_r(array_slice($car, 1,4));

	// array_chunk

	echo '<br>==========array_slice==========<br>';
	print_r($car);
	print_r(array_chunk($car, 3));

	$product  = ['Brezza', 'City', 'XL100', 'Creata', 'Nexon', 'Xuv700'];

	echo '<br>==========array_merge==========<br>';
	print_r(array_merge($car,$product));

	// array_combine

	echo '<br>==========array_combine==========<br>';
	print_r(array_combine($car, $product));

	// array_push

	echo '<br>==========array_push==========<br>';
	print_r(array_push($car, 'MG' , 'Kia'));

	// array_pop
	echo '<br>==========array_pop==========<br>';
	print_r(array_pop($car));

	// array_key_exist
	$name = [
		'vipul' => 'memakiya',
		'jay' => 'patel',
		'ram' => 'lakshman'
	];
	print_r($name);
	echo '<br>==========array_key_exists==========<br>';
	print_r(array_key_exists('ram', $name));

	// array_search
	echo '<br>==========array_search==========<br>';
	print_r(array_search('patel', $name));


?>