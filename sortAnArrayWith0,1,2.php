<?php 

function sort(&$a, $array_size) 
{ 
	$lo = 0; 
	$hi = $array_size - 1; 
	$mid = 0; 

	while ($mid <= $hi) 
	{ 
		switch ($a[$mid]) 
		{ 
		case 0: 
			swap($a[$lo++], $a[$mid++]); 
			break; 
		case 1: 
			$mid++; 
			break; 
		case 2: 
			swap($a[$mid], $a[$hi--]); 
			break; 
		} 
	} 
} 


function swap(&$a, &$b) 
{ 
	$temp = $a; 
	$a = $b; 
	$b = $temp; 
} 

function printArray(&$arr, $array_size) 
{ 
	for ($i = 0; $i < $array_size; $i++) 
		echo $arr[$i]." "; 
	echo "\n"; 
} 

$arr = array(0, 1, 1, 0, 1, 2, 
			1, 2, 0, 0, 0, 1); 
$array_size = sizeof($arr); 

sort($arr, $array_size); 

echo "array after segregation "; 
printArray($arr, $array_size); 

?> 
