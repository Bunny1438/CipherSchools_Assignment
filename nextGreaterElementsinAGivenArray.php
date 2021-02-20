<?php

function printNGE($arr, $n)
{
	for ($i = 0; $i < $n; $i++)
	{
		$next = -1;
		for ($j = $i + 1; $j < $n; $j++)
		{
			if ($arr[$i] < $arr[$j])
			{
				$next = $arr[$j];
				break;
			}
		}
		echo $arr[$i]." -- ". $next."\n";
		
	}
}

	$arr= array(11, 13, 21, 3);
	$n = count($arr);
	printNGE($arr, $n);
	
?>
