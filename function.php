<?php
// these are the functions used to add the numbers that are passes
// as the array in the argument of the function

function addNumbers($numbers){
  echo "$numbers[0]+$numbers[1]+$numbers[2] = ",$numbers[0]+$numbers[1]+$numbers[2];
}
$number = array(12,12,2);
 addNumbers($number);
?>