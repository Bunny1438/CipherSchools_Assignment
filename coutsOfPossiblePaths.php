<?php 

function numOfPaths($x, $y) 
{ 
	
	if ($x == 1 || $y == 1) 
			return 1; 
	return numOfPaths($x - 1, $y) + 
		numOfPaths($x, $y - 1); 
} 

echo numOfPaths(5, 5); 
	
?> 
