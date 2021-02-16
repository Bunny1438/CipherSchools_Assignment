<?php 

$R = 3;
$C = 6;

function spiral($m, $n, &$a)
{
	$k = 0;
	$l = 0;


	while ($k < $m && $l < $n)
	{
		
		for ($i = $l; $i < $n; ++$i)
		{
			echo $a[$k][$i] . " ";
		}
		$k++;

		for ($i = $k; $i < $m; ++$i)
		{
			echo $a[$i][$n - 1] . " ";
		}
		$n--;

	
		if ($k < $m)
		{
			for ($i = $n - 1; $i >= $l; --$i)
			{
				echo $a[$m - 1][$i] . " ";
			}
			$m--;
		}

	
		if ($l < $n)
		{
			for ($i = $m - 1; $i >= $k; --$i)
			{
				echo $a[$i][$l] . " ";
			}
			$l++; 
		}	 
	}
}

$a = array(array(1, 2, 3, 4, 5, 6),
		array(7, 8, 9, 10, 11, 12),
		array(13, 14, 15, 16, 17, 18));

spiral($R, $C, $a);


?>
