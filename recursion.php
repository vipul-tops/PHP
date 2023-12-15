
<?php
	
	// factorial using recursion
	function factorial($val){
		if ($val <= 0){
			return 1;
		} else{
			return ($val * factorial($val-1));
		}
	}
	$x = 5;
	$fact = factorial($x);
	echo "factorial of ".$x." Is ".$fact;

?>