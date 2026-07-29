<!-- for start a php program we need to use <?php  ?> tag  -->

<?php

// {>$<} fro define vars 
//***no need to define type for vars 

$name = "mehrad";
$age = 21;
//***php is case sensitive
//***$age diffrent with $Age



// data types are numburs/strings/arrays in php

//Type 1: strings
// we use single ('') or duble("") quotation mark for texts

$title = "basic concepts in php";
$github = 'my github';

//to understanding the difference brtween ("")&('') let's look at an example:
$course = "laravel";
echo " Training course $course";
echo "<br>";


//Type 2: numbers
//there are 2 main type of numbers in PHP : integer(-999,...,-1,0,1,2,3,.....999)& flout(1.1,2.3,65.8,....)
$post_views = 150;
$price = 49.99;

//Operators for numbers
//there are (+,-,*,/,%,**)
$num1 = 10;
$num2 = 5;
echo $num1 + $num2;
echo " for addition <br> ";

echo $num1 - $num2;
echo " for subtraction<br>";

echo $num1 * $num2;
echo " for multipliction<br>";

echo $num1 / $num2;
echo " for devision<br>";

echo $num1 % $num2;
echo " for integer remaindern<br>";

echo $num1 ** 2;
echo " for power<br>";

//there are (+=,-=,*=,/=) to assign to a variable 
echo $num1 += 2;
echo "<br>";

echo $num1 -= 2;
echo "<br>";

echo $num1 *= 2;
echo "<br>";

echo $num1 /= 2;
echo "<br>";

//there are (++,--) to increase and decrease in quantitiy

echo $num1++; // " to increase then "
echo " => ";
echo $num1;
echo "<br>";

echo $num1--; // " to decrease then "
echo " => ";
echo $num1;
echo "<br>";

echo ++$num1; // " to increase first "
echo "<br>";

echo --$num1; // " to decrease first "
echo "<br>";


//type 3: arrays
//there are two types of arrays in php indexed & asociative array

//array type 1: indexed
//they are indexed statrting from 0

$language = ["PHP", "C#", "JAVA", "GOLANG"];
echo $language[2];
echo "<br>";
//array type 2: associative
// to this type we seet a key for array elements
$users = [
    [
        "name" => "mehrad",
        "role" => "admin",
        "age" => 22
    ],
    [
        "name" => "sara",
        "role" => "editor",
        "age"  => 25
    ],
    [
        "name" => "ali",
        "role" => "user",
        "age"  => 19
    ],
];

echo $users[0]["name"];
echo "<br>";

//or we can set a key for each 
$users2 = [
    "4021845140" => [
        "name" => "mehrad",
        "role" => "admin",
        "age" => 22
    ],
    "4021845141" => [
        "name" => "sara",
        "role" => "editor",
        "age"  => 25
    ],
    "4021845142" => [
        "name" => "ali",
        "role" => "user",
        "age"  => 19
    ],
];

echo $users2["4021845141"]["name"];
echo "  ";
echo $users2["4021845141"]["role"];
echo "  ";
echo $users2["4021845141"]["age"];

?>