<?php
//we are going to talk about the recursive functions using factorial as the example

function factorial($number){
    $val = 1;
    for($x = $number;$x >=1;$x--){
        $val *=$x;
    }
    return $val;
}
echo "the factorial of 5 is ".factorial(5);

//this is the complete recursive function to output the factorial of the given number

?>