 <?php
 //this is the php script to call the function by refernce
function addNumbers($number){
    $number+=5;
};
function addAnotherNumber(&$numbers){
   $numbers+=5;
};

$numbers = 10;

//calling the two function to see the difference

addNumbers($numbers);
echo "the new value in the first function is $numbers";
addAnotherNumber($numbers);
echo "the new value from the second function is $numbers";

//in the codes above we have seen that when we have the argument that are passed
//in reference to the value that they have before being used ,there values also are called in the 
//function that have the & as the key term to reference the argument as the veriable that holds the value 
//outside of the function,so when it's called the number it holds is also affected
?>
