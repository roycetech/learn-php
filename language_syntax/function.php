<?php

// 1. Default parameter
function hello($param1="Royce") {
	echo $param1;
}
hello();
hello('World<br>');


// 2. variable parameters
function sum($num1, $num2) {
	$ret = 	$num1 + $num2;
	for ($i = 2;$i<func_num_args();$i++) {
		$ret += func_get_arg($i);
	}
	return $ret;
}
echo sum(0, 1, 2, 3);


// 3. Function that uses a global variable
$global = "World";
function helloGlobe() {
	global $global;
	return $global;
}
echo "<br>3. Example: [" . helloGlobe() . "]";
echo "<br>";


// 4. Function that uses a global variable from global array
$global4 = "World";
function helloGlobe4() {
	return $GLOBALS['global4'];
}
echo "<br>4. Example: [" . helloGlobe() . "]";
echo "<br>";


// 5. Anonymous function
$myFunc5 = function($name) {
	echo "Hello " . $name;
};
$myFunc5("Peter");


// 6. Anonymous function, using global
$global6 = "World";
$myFunc6 = function() {
// $myFunc6 = function() use($global6) {
	global $global6;
	echo "<br>6. Hello " . $global6;
};
$myFunc6();

function nested() {
	
	$x = 3;
	$func_inside = function() use($x) {	
		echo "<br>huh!" . $x;		
	};
}
nested().inside();
