<?php
namespace Source\Models;
use CoffeeCode\DataLayer\DataLayer;

class Adress extends DataLayer{
    public function __construct(){
        parent::__construct("addresses", ["user_id"], "id", true);
    }

    public function add(User $user, string $street,string $number): Adress
    {
        $this->user_id = $user->id;
        $this->street = $street;
        $this->number = $number;
        
        return $this;
    }
}