<?php

	$states = ['Gujarat', 'Rajasthan', 'Punjab', 'MP', 'Goa'];

	foreach ($states as $state ) {
		echo $state .'<br>';
	}

	$st = ['Gujarat' => 'Gandhinagar',
		 'Rajasthan' => 'Jaipur',
		 'Punjab' => 'Chandigarh',
		 'MP' => 'Bhopal',
		 'Goa' => 'Panji'];

	foreach ($st as $key => $value) {
		echo "The capital of ".$key." is ".$value ."<br>";
	}

?>