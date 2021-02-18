<?php 

$MAX_SIZE = 100; 

function printParenthesis($str, $n) 
{ 
	if($n > 0) 
		_printParenthesis($str, 0, 
						$n, 0, 0); 
	return; 
} 


function _printParenthesis($str, $pos, $n, 
						$open, $close) 
{ 
	if($close == $n) 
	{ 
		for ($i = 0; 
			$i < strlen($str); $i++) 
		echo $str[$i]; 
		echo "\n"; 
		return; 
	} 
	else
	{ 
		if($open > $close) 
		{ 
			$str[$pos] = '}'; 
			_printParenthesis($str, $pos + 1, $n, 
							$open, $close + 1); 
		} 
		
		if($open < $n) 
		{ 
		$str[$pos] = '{'; 
		_printParenthesis($str, $pos + 1, $n, 
						$open + 1, $close); 
		} 
	} 
} 

$n = 3; 
$str="	 "; 
printParenthesis($str, $n); 

?> 
