<?php 

function segregate(&$array, $n) 
{ 
	$count = 0; 

	for ($i = 0; $i < $n; $i++) 
	{ 
		if ($array[$i] == 0) 
			$count++; 
	} 

	for ($i = 0; $i < $count; $i++) 
		$array[$i] = 0; 

	for ($i = $count; $i < $n; $i++) 
		$array[$i] = 1; 
} 


function toprint(&$array , $n) 
{ 
	echo ("Array after segregation is "); 

	for ($i = 0; $i < $n; $i++) 
		echo ( $array[$i] . " "); 
} 

$array = array(0, 1, 0, 1, 1, 1 ); 
$n = sizeof($array); 

segregate($array, $n); 
toprint($array, $n); 
	

?> 
