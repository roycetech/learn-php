<?php 
	
	// 1. Initialize a Map with both integer and string keys
	$array1 = ['SFO' => 'San Francisco', 0 => 'New York City' ];
	print $array1[0];print "<br>";

	// 2. Reference an array element
	print $array1[0];print "<br>";
	
	// 3. Reference an array element 
	print $array1{'SFO'};print "<br>";
		
	// 4. Assign a value to a key-less array
	$array1[] = "Palestine";
	print $array1[1];print "<br>";
