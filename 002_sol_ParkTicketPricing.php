<?php

$user = [
    "4021845140" => [
        "name" => "mehrad",
        "age" => 21,
        "isStudent" => true,
        "hasVipCoupon" => true,
        "height" => 191,
        "isBanned" => false
    ],
    "4021845142" => [
        "name" => "mary",
        "age" => 21,
        "isStudent" => true,
        "hasVipCoupon" => false,
        "height" => 160,
        "isBanned" => false
    ],
    "4021845129" => [
        "name" => "nik",
        "age" => 21,
        "isStudent" => true,
        "hasVipCoupon" => false,
        "height" => 170,
        "isBanned" => true
    ]
];

$basePrice = 100000;
$finalPrice = $basePrice;
if ($user["4021845140"]["isBanned"]) {
    echo "You are forbidden to enter.";
} else {
    if ($user["4021845140"]["age"] < 6) {
        $finalPrice = 0;
    } elseif ($user["4021845140"]["isStudent"]) {
        if ($user["4021845140"]["age"] >= 6 && $user["4021845140"]["age"] < 18) {
            $finalPrice *= 0.5;
        } else {
            $finalPrice *= 0.8;
        }
    } else {
        if ($user["4021845140"]["age"] >= 6 && $user["4021845140"]["age"] < 18) {
            $finalPrice *= 0.7;
        } else {
            $finalPrice *= 1;
        }
    }
    if ($user["4021845140"]["hasVipCoupon"] && $finalPrice >= 10000) {
        $finalPrice -= 10000;
    } elseif ($user["4021845140"]["hasVipCoupon"] && $finalPrice < 10000) {
        $finalPrice = 0;
    }
}



$canUseExcitingGames = ($user["4021845140"]["age"] >= 12 && $user["4021845140"]["height"] >= 140) ? 'Permitted' : 'Unauthorized';
echo "final price = $finalPrice  $ <br> Access to exciting games: $canUseExcitingGames";