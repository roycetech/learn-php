<?php 
	// 1. Initialize an associative array
	$array1 = array('firstName' => 'Royce', 'lastName' => 'Remulla');
	
	// 2. Initialize an associative array
	$array2 = ['firstName' => 'Royce', 'lastName' => 'Remulla'];
	
	// 3. Reference an array element
	print $array1['firstName'];print "<br>";
	
	// 4. Reference an array element
	print $array1{'lastName'};print "<br>";
		
	// 7. Assign a value to a key-less array
	$array1['dob'] = '1969';
	print $array1['dob'];print "<br>";
	
	