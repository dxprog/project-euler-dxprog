<?php

$start = microtime(true);

$num = 2;
$divisible = false;
while (!$divisible) {
	$divisible = false;
	for ($i = 3; $i < 21; $i++) {
		$divisible = $num % $i === 0;
		if (!$divisible) {
			$num += 2;
			break;
		}
	}
}

echo $num, ' - [ ', microtime(true) - $start, ' ]';