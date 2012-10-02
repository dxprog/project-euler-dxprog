<?php

$max = 0;
$triangle = 0;
$begin = microtime(true);

while (true) {

	$max++;
	$triangle += $max;
	$divisors = 0;
	$inc = $triangle % 2 == 0 ? 1 : 2;
	
	for ($i = 1, $count = round(sqrt($triangle)); $i <= $count; $i += $inc) {
		if ($triangle % $i == 0) {
			$divisors += 2;
		}
	}
	
	if ($divisors > 500) {
		break;
	}
	
}

echo $triangle, ' [ ', $max, ' ] - ', microtime(true) - $begin;