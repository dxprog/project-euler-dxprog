<?php

$gridX = 21;
$gridY = 21;

// Initialize the array (edges only have one route to the end)
$map = array();
for ($i = 0; $i < $gridY; $i++) {
	$map[$i] = array();
	for ($j = 0; $j < $gridX; $j++) {
		$map[$i][$j] = $i == $gridY - 1 || $j == $gridX - 1 ? 1 : 0;
	}
}

for ($i = $gridY - 1; $i >= 0; $i--) {
	for ($j = $gridX - 1; $j >= 0; $j--) {
		if ($i < $gridY - 1 && $j < $gridX - 1) {
			$map[$i][$j] = $map[$i + 1][$j] + $map[$i][$j + 1];
		}
	}
}

echo $map[0][0];