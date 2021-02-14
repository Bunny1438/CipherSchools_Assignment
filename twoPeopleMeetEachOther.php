

<?php  
//to find two people ever meet each other or not  
function meet($p1, $p2, $u1, $u2) 
{   

    if ($p1 < $p2 && $u1 <=$u2) 
        return false; 
    if ($p1 > $p2 && $u1 >= $u2) 
        return false;  
  

    if ($p1 < $p2) 
    { 
        list($p1, $p2) = array($p2,  
                               $p1); 
        list($u1, $u2) = array($u2,  
                               $u1); 
      
    }  
  
    while ($p1 >= $p2)  
    { 
        if ($p1 == $p2)  
            return true; 
          
        $p1 = $p1 + $u1;  
        $p2 = $p2 + $u2;  
    } 
  
    return false;  
} 
   
$p1 = 6;  
$p2 = 5; 
$u1 = 9;
$u2 = 8; 
if (meet($p1, $p2, 
             $u1, $u2)) 
    echo ("Yes, They meet each other.");  
else
    echo ("No, They wont."); 

?> 