<?php

	$fname = 'Vipul';
	$lname = 'Memakiya';

	// Globals Variable
	echo '<pre>';	
	function full_name(){
		$full_name = $GLOBALS['fname'] . ' ' . $GLOBALS['lname'];
		echo $full_name ;

	}

	full_name();
	echo '<br>';

	function ful_name(){
		$GLOBALS ['ful_name'] = $GLOBALS['fname']. ' ' . $GLOBALS['lname'];

	}
	ful_name();
	echo $ful_name;

	// _SERVER 

	print_r($_SERVER);

?>