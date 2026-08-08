<?php
//A function is like a factory machine: it takes an input (arguments), performs processing, and delivers an output (return).

function calculateDiscount($prise, $discountPercentage): float
{
    $discountAmount = $prise * $discountPercentage / 100;
    $finalPrice = $prise - $discountAmount;
    return $finalPrice;//function output

}

//call function
$result=calculateDiscount(100000,20);
echo "final price = $result";

//***`return` signifies the end of a function: when PHP encounters the `return` keyword, it returns the output, and any code following it within the function is not executed.

//Default Values: You can set default values for inputs:
function greet($name= "dear user"):string{
    return "Hello $name";
}

echo"<br>";
echo greet();
echo "<br>";
echo greet( "mehrad");

//Specifying input and output types (Type Hinting): In modern PHP and Laravel, we specify data types to prevent errors:
function addNumbers(int $a, int $b): int {
    return $a + $b;
}

///{{{{Variable Scope}}}}
/// ***An important point in PHP: variables defined outside a function are not accessible inside the function!

$tax=10;
function calculateTax(float $price): float{
    return $price /*  +$tax */;// it's wrong
}
//If you want to bring a variable into a function from the outside, you must either pass it as an argument or use the `use` keyword in closures.

///{{{{ Closure Functions}}}}
//A function that has no name and is stored directly in a variable or passed as an input to another function.

$square=function ($number){
    return $number * $number;
};
echo "<br>";
echo $square(5);

//***If you want to use an external variable inside this function, you use `use`:
$tax2=15;
$applyTax=function ($number) use ($tax2){
    return $tax2 + $number ;
};
echo "<br>";
echo $applyTax(150);
///{{{{  Arrow Functions}}}}
// A very concise way to write single-line anonymous functions. It uses the `fn()` syntax and requires neither `return` nor `use` (it automatically captures external variables):
$tax3=20;
$applyTax2=fn($number)=>$number+$tax3;
echo "<br>";
echo $applyTax2(200);






