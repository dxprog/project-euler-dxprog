<?php

function numberToText($num) {

	$retVal = '';
	
	$tens = array('', '', 'twenty', 'thirty', 'forty', 'fifty', 'sixty', 'seventy', 'eighty', 'ninety');
	$ones = array('', 'one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine');
	$teens = array('ten', 'eleven', 'twelve', 'thirteen', 'fourteen', 'fifteen', 'sixteen', 'seventeen', 'eighteen', 'nineteen');
	
	// Reverse the digits of the number
	$num = (string)$num;
	$out = '';
	for ($i = strlen($num) - 1; $i > -1; $i--) {
		$out .= $num{$i};
	}
	
	for ($i = 0, $count = strlen($out); $i < $count; $i++) {
		
		// Special cases for the teens
		$val = (int)$out{$i};
		if ($i == 0 && $count >= 2 && $out{1} == '1') {
			$retVal = $teens[$val];
			$i++;
		} else {
			if ($i == 1 && $out{$i} !== '0') {
				$retVal = $tens[$val] . $retVal;
			} else {
				$temp = $ones[$val];
				if ($i == 2) {
					$temp .= 'hundred' . ($out{0} == '0' && $out{1} == '0' ? '' : 'and');
				}
				$retVal = $temp . $retVal;
			}
		}
		
	}
	
	return $retVal;

}

$list = '';
for ($i = 1; $i < 1000; $i++) {
	$list .= numberToText($i);
}
$list .= 'onethousand';
echo strlen($list);