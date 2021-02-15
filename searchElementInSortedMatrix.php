<?php 

function search($matrix, $n, $x)
{
	$i = 0;
	$j = $n - 1;
	while ($i < $n && $j >= 0)
	{
		if ($matrix[$i][$j] == $x)
		{
			echo "n found at " . $i. 
						", " . $j;
			return 1;
		}
		if ($matrix[$i][$j] > $x)
			$j--;
		else
			$i++;
	}
	
	echo "n not found";
	return 0; 
}


$matrix = array(array(15, 22, 40, 30),
			array(18, 35, 25, 41),
			array(21, 29, 35, 43),
			array(35, 36, 29, 53));
search($matrix, 4, 35);

?>
