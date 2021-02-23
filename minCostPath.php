<?php

$R = 3;
$C = 3;


function minCost($cost, $m, $n)
{
global $R;
global $C;
if ($n < 0 || $m < 0)
	return PHP_INT_MAX;
else if ($m == 0 && $n == 0)
	return $cost[$m][$n];
else
	return $cost[$m][$n] + 
			min1(minCost($cost, $m - 1, $n - 1),
			minCost($cost, $m - 1, $n), 
			minCost($cost, $m, $n - 1) );
}

function min1($x, $y, $z)
{
if ($x < $y)
	return ($x < $z)? $x : $z;
else
	return ($y < $z)? $y : $z;
}

$cost = array(array(1, 2, 3),
			array (4, 8, 2),
			array (1, 5, 3));
echo minCost($cost, 2, 2);

?>
