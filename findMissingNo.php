<?php

function missingNo ($a, $n)
{
	$total = ($n + 1) * ($n + 2) / 2; 
	for ( $i = 0; $i < $n; $i++)
		$total -= $a[$i];
	return $total;
}

$a = array(1, 2, 4, 5, 6);
$miss = getMissingNo($a, 5);
echo($miss);

?>
