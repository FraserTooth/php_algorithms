<?php
function findIt(array $seq) : int
{
    $map=array();
    foreach ($seq as $num) {
      if (array_key_exists($num, $map)) { 
        $map[$num] += 1;
      } 
      else{ 
        $map[$num] = 1;
      } 
    };
    
    foreach ($map as $num => $times) {
      if($times%2){
        return $num;
      }
    };
    
    return false;
}
