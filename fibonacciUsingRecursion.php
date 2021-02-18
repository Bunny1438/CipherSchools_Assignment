<?php

function fibonacci($x)
{
	if ($x <= 1)
		return $x;
	return fibonacci($x - 1) + 
		fibonacci($x - 2);
}

$x = 20;
echo fibonacci($x);

?>
