<?php

$max = 0;
$triangle = 0;
$begin = microtime(true);

while (true) {

	$max++;
	$triangle += $max;
	$divisors = 0;
	$start = 1;
	
	for ($i = $start, $count = round(sqrt($triangle)); $i <= $count; $i++) {
		if ($triangle % $i == 0) {
			$divisors += 2;
		}
	}
	
	if ($divisors > 500) {
		break;
	}
	
}

echo $triangle, ' [ ', $max, ' ] - ', microtime(true) - $begin;