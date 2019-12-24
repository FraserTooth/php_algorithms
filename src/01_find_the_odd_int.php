<?php

//From an Array of Integers
//Return the Integer that appears an Odd Number of Times

function findIt(array $seq): int
{
  $map = array();
  foreach ($seq as $num) {
    if (array_key_exists($num, $map)) {
      $map[$num] += 1;
    } else {
      $map[$num] = 1;
    }
  };

  foreach ($map as $num => $times) {
    if ($times % 2) {
      return $num;
    }
  };

  return false;
}
