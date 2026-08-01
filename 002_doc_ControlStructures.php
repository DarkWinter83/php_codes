<?php
//Conditional statements give a program the ability to "make decisions." This means the path of code execution changes based on whether a "condition" is true or false.
//Comparison operators:
// {==} to Quantitative equality

echo 5 == '5'; //is true and return "1"
echo '<br>';
echo 6 == 7; //is false and return ""
echo '<br>';

//{===} to Exact equality 

echo 5 === 5; //is true and return "1"
echo '<br>';
echo 5 === '5'; //is false and return ""
echo '<br>';

//{!=} or {<>} to Inequality

echo 5 <> 6; //is Unequal and return "1"
echo '<br>';
echo 5 != 4; //is Unequal and return "1"
echo '<br>';

//{!==} Strict inequality Returns true if the value or data type is not equal.

// {>}, {<} , {>=} , {<=} : greater than, less than, greater than or equal to, less than or equal to.

//We use logical operators to combine two or more conditions.
//{&&} to AND , {||} to OR , {!} to NOT

//There are three types of conditional structures in PHP.
//type 1: if() ,elseif() ,else

$userRole = "admin";
$isActive = true;

if ($userRole === 'admin' && $isActive) {
    echo "Full access to the admin panel";
} elseif ($userRole === 'editor' && $isActive) {
    echo "Access only to the article editing section";
} elseif (!$isActive) {
    echo "Your user account is inactive.";
} else {
    echo "You are a regular user and do not have access.";
}

echo '<br>';

//***PHP evaluates conditions from top to bottom. As soon as it encounters the first true condition, it executes the code within that block, exits the entire `if` structure, and completely ignores any subsequent conditions.

//type 2: Ternary Operator
//the pattern of ternary operator {Condition ? "Code if true" : "Code if false";}

$age = 18;

//formal methode
if ($age >= 18) {
    $status = 'adualt';
} else {
    $status = ' teenage';
}
echo $status;
echo '<br>';
//ternary methode
$age = 17;

$status = ($age >= 18) ? 'adualt' : 'teenage';
echo $status;
echo '<br>';

//type 3: switch case

$orderStatuse = 'pending';
switch ($orderStatuse) {
    case "pending":
        echo "Your order is awaiting payment.";
        break;// The break statement is required so that the remaining cases do not execute!
    case "processing":
        echo "The order is being processed and packed.";
        break;
    case "shipped":
        echo "The order has been handed over to the postal service.";
        break;
    default:
    echo "The order status is unknown.";
    break;
}
