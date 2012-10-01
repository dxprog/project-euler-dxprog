<?php

$fibanocci = array( 1, 2 );
$count = 2;
while ($num < 4000000) {
	$num = $fibanocci[$count - 2] + $fibanocci[$count - 1];
	if ($num < 4000000) {
		$fibanocci[] = $num;
		echo $num, PHP_EOL;
		$count++;
	}
}

$total = 0;
for ($i = 0; $i < $count; $i++) {
	if ($fibanocci[$i] % 2 == 0) {
		$total += $fibanocci[$i];
	}
}

echo $total;