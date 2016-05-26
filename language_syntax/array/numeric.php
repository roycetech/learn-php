<?php 
	// 1. Initialize a numeric array
	$array1 = array('Apple', "Orange", "Patatas");
	
	// 2. Initialize an array
	$array2 = ['Red', "Green", "Blue"];
	
	
	// 3. Reference an array element
	print $array1[0];print "<br>";
	
	// 4. Reference an array element 
	print $array1{0};print "<br>";

	// 5. Change an element of an array
	$array1[0] = "Banana";
	print $array1{0};print "<br>";
		
	// 6. Assign a value to a key-less array
	$array1[] = "Lemon";
	print $array1{3};print "<br>";
	
	