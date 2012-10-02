<?php

$begin = microtime(true);

function collatzProblem($num) {

	$retVal = 0;
	while ($num != 1) {
		$num = $num % 2 == 0 ? $num / 2 : $num * 3 + 1;
		$retVal++;
	}

	return $retVal;
	
}


$max = 0;
$num = 0;
for ($i = 1000000; $i > 0; $i--) {
	$count = collatzProblem($i);
	$max = $count > $max ? $count : $max;
	$num = $max == $count ? $i : $num;
}

echo $num, ' - [ ', microtime(true) - $begin, ' ]';