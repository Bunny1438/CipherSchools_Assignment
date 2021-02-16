<?php 

function merge(&$array1, &$array2, 
					$n1, $n2, &$array3)
{
	$i = 0;
	$j = 0;
	$k = 0;

	while ($i < $n1 && $j < $n2)
	{
	
		if ($array1[$i] < $array2[$j])
			$array3[$k++] = $array1[$i++];
		else
			$array3[$k++] = $array2[$j++];
	}

	while ($i < $n1)
		$array3[$k++] = $array1[$i++];

	while ($j < $n2)
		$array3[$k++] = $array2[$j++];
}


$array1 = array(1, 3, 5, 7);
$n1 = sizeof($array1);

$array2 = array(2, 4, 6, 8);
$n2 = sizeof($array2);

$array3[$n1 + $n2] = array();
merge($array1, $array2, $n1, 
				$n2, $array3);

echo "Final Array \n" ;
for ($i = 0; $i < $n1 + $n2; $i++)
	echo $array3[$i] . " ";

?>
