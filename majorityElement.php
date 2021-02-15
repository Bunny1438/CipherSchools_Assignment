<?php
function majority_num($a)
 {
        $x = 0;
        $y = 1;
        
        for($i=1; $i<sizeof($a); $i++)
        {
            if ($a[$x] == $a[$i])
            {
                $y += 1;
            }
            else
             {
                $y -= 1;
                if ($y == 0)
                {
                    $x = $i;
                    $y = 1;
                }
          }   
        }      
    return $a[$x];
}
$array1 = array(1, 2, 3, 4, 5, 5, 5, 5, 5, );
$array2 = array(1,2,3,3,3,3,2,3,5,6,1,3,3,4,6,6);
print(majority_num($array1)."\n");
print(majority_num($array2)."\n");
?>
