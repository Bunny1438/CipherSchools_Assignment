<?php 

function alternate($array, $n) 
{  
	sort($array); 


	$i = 0; 
	$j = $n - 1; 
	while ($i < $j) 
	{ 
		echo $array[$j--]." "; 
		echo $array[$i++]." "; 
	} 


	if ($n % 2 != 0) 
		echo $array[$i]; 
} 

$array= array(1, 12, 4, 6, 7, 10); 
$n = sizeof($array) / sizeof($array[0]); 

alternate($array, $n); 

?> 
