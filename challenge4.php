<?php

function isPalindrome($text) {
	
	$text = (string)$text;
	
	// This is the long and stupid way of doing this
	$backwards = '';
	for ($i = strlen($text) - 1; $i >= 0 ; $i--) {
		$backwards .= $text{$i};
	}
	
	return $text == $backwards;
	
}

$max = 0;
for ($i = 100; $i < 1000; $i++) {
	for ($j = 100; $j < 1000; $j++) {
		$num = $i * $j;
		$max = isPalindrome($num) && $num > $max ? $num : $max;
	}
}
echo $max;