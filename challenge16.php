<?php

$x = bcpow(2, 1000);
$string = sprintf("%.0f", $x);
$out = 0;

for ($i = 0, $count = strlen($string); $i < $count; $i++) {
	$out += (int)$string{$i};
}

echo $out;