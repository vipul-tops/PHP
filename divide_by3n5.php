<?php
	
	/*
	Find list of number from 1 to 30 which is complete devide by 3 & 5 
	*/
	$list = [];

	for ($i = 1;$i <=30; $i++){
		if($i%3==0 && $i%5==0){
			$list[] = $i;
		}
	}
	echo "List of Number Completely divided with 3 and 5 : ".$list;

?>