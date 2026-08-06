<?php
$user = [
    "4021845140" => [
        "name" => "Mehrad",
        "age" => 21,
        "isStudent" => true,
        "hasVipCoupon" => true,
        "height" => 191,
        "isBanned" => false
    ],
    "4021845142" => [
        "name" => "Mary",
        "age" => 21,
        "isStudent" => true,
        "hasVipCoupon" => false,
        "height" => 160,
        "isBanned" => false
    ],
    "4021845129" => [
        "name" => "Nik",
        "age" => 21,
        "isStudent" => true,
        "hasVipCoupon" => false,
        "height" => 170,
        "isBanned" => true
    ],
    "4021845131" => [
        "name" => "karl",
        "age" => 5,
        "isStudent" => false,
        "hasVipCoupon" => false,
        "height" => 180,
        "isBanned" => false
    ]
];
$basePrice = 100000;
foreach ($user as $ID => $info) {
    $ticketPrice = $basePrice;
    if (!$info['isBanned']) {
        if ($info['age'] < 6) {
            $ticketPrice = "free";
        } elseif ($info['age'] >= 6 && $info['age'] < 18) {
            if ($info['isStudent']) {
                $ticketPrice = $basePrice * 0.5;
            } else {
                $ticketPrice = $basePrice * 0.7;
            }
        } else {
            if ($info['isStudent']) {
                $ticketPrice = $basePrice * 0.8;
            } else {
                $ticketPrice = $basePrice;
            }
        }
        $info["canUseExcitingGames"] = $info['age'] >= 12 && $info['height'] >= 140?"access":"no access";
        if ($info['hasVipCoupon']&&$ticketPrice>=10000&&$info['age']>=6) {
            $ticketPrice-=10000;
        }
        $info["ticketPrice"] = $ticketPrice;
        echo "=====================================<br>Dear {$info["name"]} with $ID<br> your ticket price = {$info['ticketPrice']} $<br>{$info['canUseExcitingGames']} to air tran<br>=====================================<br>";

    } else {
        echo "=====================================<br>Dear {$info["name"]} with $ID<br> you are banned! <br>=====================================<br>";
    }
}