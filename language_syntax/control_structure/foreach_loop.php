<?php

	$array1 = [1, 2, 3];
	$array2 = [1 => 'one', 2 => 'two', 3 => 'three'];
	
	// 1. For each on a numeric array
	foreach ($array1 as $next) {
		echo "$next<br>";
	}
	
	// 2. For each on an associative array
	foreach ($array2 as $k => $v) {
		echo "$k : $v <br>";
	}
	
	// 3. For each on a numeric array, alternative syntax
	foreach ($array1 as $next):
		echo "$next<br>";
	endforeach;
	