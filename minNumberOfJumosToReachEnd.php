<?php
function minJumps($arr, $l, $h)
{
	
	if ($h == $l)
		return 0;
	
	if ($arr[$l] == 0)
		return INT_MAX;
	
	$min = 999999;
	
	for ($i = $l+1; $i <= $h && 
			$i <= $l + $arr[$l]; $i++)
	{
		$jumps = minJumps($arr, $i, $h);
		
		if($jumps != 999999 && 
					$jumps + 1 < $min)
			$min = $jumps + 1;
	}
	
	return $min;
}

$arr = array(1, 3, 6, 3, 2, 3, 6, 8, 9, 5);
$n = count($arr);

echo "Minimum number of jumps to reach "
	. "end is ". minJumps($arr, 0, $n-1);
	
?>
