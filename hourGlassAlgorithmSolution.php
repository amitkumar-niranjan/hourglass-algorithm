<?php

// defining variables
$arr = array();
$big = 0;
$small=array();
$f_row=0;
$s_row=0;
$t_row=0;

// getting 6X6D array
for ($i = 0; $i < 6; $i++) 
{
    $arr_temp = rtrim(fgets(STDIN));
    $arr[] = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));
}

// addingcalculating hourglass algorithm
for($i=0;$i<4;$i++)
{
    for($j=0;$j<4;$j++)
    {
        $f_row = $arr[$i][$j]+$arr[$i][$j+1]+$arr[$i][$j+2];
        $s_row = $arr[$i+1][$j+1];
        $t_row = $arr[$i+2][$j]+$arr[$i+2][$j+1]+$arr[$i+2][$j+2];
        $tot = $f_row + $s_row + $t_row;
        
        //checking if total >0 or total<0
        if($tot>$big){
            $big = $tot;
        }else{
            $small[] = $tot;
        }
    }
    
}
// outputiing results
if($big>0){
    echo $big;
}else{
   rsort($small);
   echo $small[0];
}
