<?php

function printKMax($arr, $n, $k)
{
	$j; $max;

	for ($i = 0; $i <= $n - $k; $i++)
	{
		$max = $arr[$i];

		for ($j = 1; $j < $k; $j++)
		{
			if ($arr[$i + $j] > $max)
			$max = $arr[$i + $j];
		}
		printf("%d ", $max);
	}
}

$arr = array(1, 2, 3, 4, 5, 
			6, 7, 8, 9, 10);
$n = count($arr);
$k = 3;
printKMax($arr, $n, $k);

?>
