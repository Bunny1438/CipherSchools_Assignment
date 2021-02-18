<?php 

function permutation($str, $l, $r) 
{ 
	if ($l == $r) 
		echo $str. "\n"; 
	else
	{ 
		for ($i = $l; $i <= $r; $i++) 
		{ 
			$str = swap($str, $l, $i); 
			permutation($str, $l + 1, $r); 
			$str = swap($str, $l, $i); 
		} 
	} 
} 


function swap($a, $i, $j) 
{ 
	$temp; 
	$charArray = str_split($a); 
	$temp = $charArray[$i] ; 
	$charArray[$i] = $charArray[$j]; 
	$charArray[$j] = $temp; 
	return implode($charArray); 
} 

$str = "ABC"; 
$n = strlen($str); 
permutation($str, 0, $n - 1); 

?> 
