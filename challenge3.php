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

$num = 600851475143;

$out = 0;
for ($i = 3, $count = sqrt($num); $i < $count; $i += 2) {
	if (isNumberPrime($i) && $num / $i == floor($num / $i)) {
		echo $i, PHP_EOL;
		$out = $i;
	}
}

echo $out;