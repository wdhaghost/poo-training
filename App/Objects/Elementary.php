<?php

namespace App\Objects;

class Elementary extends School
{
    protected static array $grades = ["CP", "CE1", "CE2", "CM1", "CM2"];

    public function __construct(string $name, string $city)
    {
        parent::__construct($name, $city);
        $this->name = $name;
        $this->city = $city;
    }
}
