<?php
	
	// simple Function
	function data(){
		
		echo "Simple Function";
	}
	data();

	echo '<hr>';
	// Paramerized function

	function addition($value1,$value2){
		$add = $value1 + $value2;
		return $add;
	}
	echo "Addition : ".addition(5,10);
	echo '<hr>';

	// default paramaeterized function

	function def_para($value1 = 10,$value2 = 5){
		$add = $value1 + $value2;
		return $add;
	}
	echo "Addition : ".def_para(20);

	//
	echo '<hr>';
	function name($name = "Vipul"){
		echo "My name Is $name";
	}
	name();
?>