<?php

if (!isset($argv[1])) {
	echo 'Enter the required amount';
	exit(1);
}
if (!is_numeric($argv[1])) {
	echo 'Enter an integer';
	exit(1);
}

$entrer = $argv[1];

$number = [];

$k = 0;

for ($i =1; $i <= $entrer; $i++) {
	if ($i % 2 == 0) {
		$k += 2 * $entrer - 1;
	} else {
		$k += 1;
	}

	$number[] = $k;	
}

for ($j =0; $j < $entrer; $j++) {

	for ($n =0; $n < $entrer; $n++) {

		if ($n % 2 == 0) {
			echo $number[$n] + $j . "\t";
		} else {
		
			echo $number[$n] - $j . "\t";
		}
	}

	echo PHP_EOL;
}