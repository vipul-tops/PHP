<?php
	echo '<pre>';
	putenv("username=Vipul");
	print_r(getenv('USERNAME'));
	echo '<br>';
	$_ENV['fav_car'] = 'Brezza';

	print_r($_ENV) ;
?>