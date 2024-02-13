<?php
require __DIR__ . "/../vendor/autoload.php";

use Source\Models\Adress;
use Source\Models\User;

$user = new User();
$user->first_name = "Ailton";
$user->last_name = "Santos";
$user->genre = "male";
$user->save();

$addr = new Adress;
$addr->add($user, "Casa dos infernos", "fundos");
$addr->save();

var_dump($user);