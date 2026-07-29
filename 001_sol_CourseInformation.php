<?php
$courseTitle="laravel full course";
$price=5000;
$discount=0.2;

$teacher=[
    "name"=>"mehrad",
    "experience"=>5,
    "skills"=>["php","laravel","git"]
];

echo "$courseTitle by {$teacher["name"]} <br> course price = ";
echo $price-($price*$discount);
echo"$ <br> first skill = {$teacher["skills"][0]}";

?>