<?php

$sum = 0;

function isNumberPrime($num) {
	if ($num > 3) {
		for ($i = 2, $count = sqrt($num); $i <= $count; $i++) {
			if ($num % $i == 0) {
				return false;
			}
		}
	}
	return true;
}

for ($i = 2; $i < 2000000; $i++) {
	
	if (isNumberPrime($i)) {
		$sum += $i;
	}
	
}

echo $sum;