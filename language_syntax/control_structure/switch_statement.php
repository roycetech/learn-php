<?php

	// 1. Main Syntax
	$age1 = 1;
	switch ($age1) {
		case 1:
			print 1;
			break;
		case 2:
			print 2;
			break;
		case 3:
			print 1;
			break;
		default: 
			print  "Default!";
	}
	
	// 2. Alternative Syntax
	$age2 = 2;
	switch ($age2):
		case 1:
			print 1;
			break;
		case 2:
			print 2;
			break;
		case 3:
			print 1;
			break;
		default: 
			print  "Default!";
	endswitch;
	