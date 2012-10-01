<?php

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

$primes = 1;
$prime = 0;
$i = 3;
while ($primes < 10001) {

	if (isNumberPrime($i)) {
		$prime = $i;
		$primes++;
		echo $prime, ' - ', $primes, PHP_EOL;
	}
	$i += 2;
	
}

echo $prime;