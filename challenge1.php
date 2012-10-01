<?php

$total = $i = 0;
while ($i < 999) $total += ++$i % 3 == 0 || $i % 5 == 0 ? $i : 0;

// 233167

/*for ($i = 0; $i < $max; $i++) {
	if ($i % 3 == 0 || $i % 5 == 0) {
		echo $i, PHP_EOL;
		$total += $i;
	}
}*/

echo $total;