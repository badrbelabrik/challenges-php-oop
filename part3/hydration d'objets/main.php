<?php
require "User.php";
require "UserMapper.php";

$databaseRows = [
    [
        "id" => 1,
        "name" => "Badr",
        "email" => "badr@example.com"
    ],
    [
        "id" => 2,
        "name" => "Sara",
        "email" => "sara@example.com"
    ],
    [
        "id" => 3,
        "name" => "Youssef",
        "email" => "youssef@example.com"
    ]
];
$usermapper1 = new UserMapper();
$mappedArray = $usermapper1->mapRowsToUsers($databaseRows);

foreach($mappedArray as $user){
    echo $user->getId().'-';
    echo $user->getName().'-';
    echo $user->getEmail()."\n";
}
