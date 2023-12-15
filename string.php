<?php

	$str = "I Am Software Developer";

	// lower case
	echo '<br>==========strtolower==========<br>';
	echo strtolower($str);

	// upper case
	echo '<br>==========strtoupper==========<br>';
	echo '<br>'.strtoupper($str);

	// string length
	echo '<br>==========strlen==========<br>';
	echo '<br>'.strlen($str);

	// string to array
	echo '<br>==========explode==========<br>';
	echo '<pre>';
	print_r(explode(" ", $str));

	// substr

	echo '<br>==========substr==========<br>';
	echo '<br>'.substr($str, 5);
	echo '<br>'.substr($str, 5,8);

	// str_replace

	echo '<br>==========str_replace==========<br>';
	echo '<br>'.str_replace('Software', 'Computer', $str);

	// str_pos

	echo '<br>==========strpos==========<br>';
	echo '<br>'.strpos($str, 'Software');

	// sha1

	echo '<br>==========sha1==========<br>';
	echo sha1($str);

	// md5

	echo '<br>==========md5==========<br>';
	echo md5($str);

	// str_word_count

	echo '<br>==========str_word_count==========<br>';
	echo str_word_count($str);

	// ucfirst

	echo '<br>==========strpos==========<br>';
	echo ucfirst($str);

	// lcfirst

	echo '<br>==========strpos==========<br>';
	echo lcfirst($str);






?>