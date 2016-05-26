<?php

	Echo '<br>===============<br>1. While loop<br>';
	$number1 = 10;
	while ($number1 > 0) {
		echo "$number1";
		$number1--;
	}

	Echo '<br>===============<br>2. While loop, Alternative syntax<br>';
	$number2 = 10;
	while ($number2 > 0):
		echo "$number2";
		$number2--;
	endwhile;

	Echo '<br>===============<br>3. While loop, Non block<br>';
	$number3 = 10;
	while ($number3 > 0) 
		echo $number3--;
	
	Echo '<br>===============<br>4. Do-While loop<br>';
	$number4 = 0;
	do {
		echo "$number4";
		$number4++;
	} while ($number4 < 10);
	
	Echo '<br>===============<br>5. Do-While loop, Non bock<br>';
	$number5 = 0;
	do echo $number5++; while ($number5 < 10);
	
		
		