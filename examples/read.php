<?php

require __DIR__ . "/../vendor/autoload.php";

use Source\Models\User;

// use CoffeeCode\DataLayer\Connect;

// $conn = Connect::getInstance();
// $error = Connect::getError();

// if($error){
//     echo $error->getMessage();
// }

// $query = $conn->query("SELECT * FROM Users");
// var_dump($query->fetchAll());

$user = new User;
$list = $user->find()->fetch(true);
// var_dump($list);

/** @var $userItem User */
foreach ($list as $userItem) {
    // var_dump($userItem->first_name);
    // echo "\n";
    // var_dump($userItem->addresses());
    print_r($userItem->data);
    echo "<br>";
    foreach ($userItem->addresses as $address) {
        print_r($address->data);
        echo "<br>";
    }
}
