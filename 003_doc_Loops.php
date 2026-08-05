<?php
//Loops are used to repeatedly execute a block of code as long as a condition holds true.

//type 1: {for} loop
//structure: for (initial value; continuation condition; step)

for ($i = 1; $i <= 5; $i++) {
    echo "number $i <br>";
}
//***{$i} continues as long as it exceeds the loop condition

//type 2: {while / do-while} loop
//It is used when the number of repetitions is not known exactly; instead, the repetition continues as long as a specific condition holds true.

$bankBalance = 5000;
$month = 0;

while ($bankBalance < 10000) {
    $bankBalance += 1000;
    $month++;
}
echo "<br>your bank balance is $bankBalance after $month month <br><br>";

//The difference between `do-while` and `while` is that in a `do-while` loop, the code inside the loop executes at least once—even if the condition is false from the very beginning—because the condition is checked at the end.

$i = 10;
do {
    echo "number $i bigger than 50 <br>";
    echo "This statement is incorrect, but it executes the first time because the loop is entered without checking the condition.<br><br>";
} while ($i >= 50);

//type 3:{foreach}
//the Dedicated array loop
//We can use this loop in three ways.

//first:{Access to the "Value" only}
//*** for indexed array & keys not important

$products = ["mobile", "laptop", "tablet", "computer"];

foreach ($products as $item) {
    echo "product: $item <br>";
}
//*** The loop terminates automatically once all the array elements have been processed.

echo "<br>";

//second:{Simultaneous access to the "Key" and "Value"}
//*** for we have associative array, or we need keys/IDs

$userProfile = [
    "user name" => "mehrad_dev",
    "email" => "mehrad@dev.com",
    "role" => "developer"
];

foreach ($userProfile as $key => $value) {
    echo "$key  =  $value<br>";
}
//third:{Combining multidimensional arrays, foreach, and if.}
//*** In real-world projects, the database returns a list of users or products as an array of arrays.\

$users = [
    [
        "id" => 1,
        "name" => "mehrad",
        "score" => 96,
        "isActive" => true,
    ],
    [
        "id" => 2,
        "name" => "mary",
        "score" => 90,
        "isActive" => true,
    ],
    [
        "id" => 3,
        "name" => "john",
        "score" => 45,
        "isActive" => false,
    ],
    [
        "id" => 4,
        "name" => "jack",
        "score" => 48,
        "isActive" => true,
    ]
];

echo "<br>";

foreach ($users as $user) {
    if ($user["isActive"] === true && $user["score"] > 50) {
        echo " {$user['name']} with score {$user['score']} passed. <br>";
    } elseif ($user["isActive"] === true && $user["score"] < 50) {
        echo " {$user['name']} with score {$user['score']} failed. <br>";
    }else{
        echo " {$user['name']} is deactive. <br>";
    }
}
//Loop control statements {break and continue}
//Sometimes you want to alter the normal flow of the loop.

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

echo "<br>";
foreach ($numbers as $num) {
    if ($num % 2 === 0) {
        continue;
    }

    if ($num === 7) {
        break;
    }

    echo "odd number $num <br>";
}

//***{continue} Skip the rest of the code in this iteration of the loop and proceed directly to the next iteration.
//***{break} Stop the loop entirely right here and exit it.