<?php

namespace App\Objects;

class HighSchool extends School
{
    protected static array $grades = ["6e", "5e", "4e", "3e"];
    public function __construct(string $name, string $city,)
    {
        parent::__construct($name, $city);
        $this->name = $name;
        $this->city = $city;
    }
}
