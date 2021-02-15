<?php

function findPeak($a, $l, 
                    $h, $n)
{
    $m = $l + ($h - $l) / 2; // (l + h)/2 

    if (($m == 0 || 
        $a[$m - 1] <= $a[$m]) &&
        ($m == $n - 1 || 
        $a[$m + 1] <= $a[$m]))
        return $m;

    else if ($m > 0 && 
            $a[$m - 1] > $a[$m])
        return findPeak($a, $l, 
                        ($m - 1), $n);

 
    else return(findPeak($a, ($m + 1), 
                            $h, $n));
}


function findPeak($a, $n)
{
    return floor(findPeak($a, 0, 
                            $n - 1, $n));
}

$a = array(1, 3, 20, 4, 1, 0);
$n = sizeof($a);
echo "peak point is ", 
            findPeak($a, $n);

?>
