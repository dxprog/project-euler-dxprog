<?php

$squareSum = $sum = 0;
for ($i = 1; $i < 101; $i++) {
	$squareSum += $i * $i;
	$sum += $i;
}

echo $sum * $sum - $squareSum;