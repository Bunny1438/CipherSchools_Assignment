<?php 
function lps($seq, $i, $j) 
{ 
	
	if ($i == $j) 
		return 1; 
	
	if ($seq[$i] == $seq[$j] && $i + 1 == $j) 
		return 2; 
	
	if ($seq[$i] == $seq[$j]) 
		return lps ($seq, $i + 1, $j - 1) + 2; 
	
	return max(lps($seq, $i, $j - 1), 
			lps($seq, $i + 1, $j)); 
} 

$seq = "HELLOWORLDHELLO"; 
$n = strlen($seq); 
echo "The length of the LPS is ". 
			lps($seq, 0, $n - 1); 
			
?> 
