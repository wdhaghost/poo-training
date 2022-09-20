<?php

namespace App\Objects;

class HighSchool extends School
{
    protected static array $grades = ["2nd","1ère","Terminale"];
    public function __construct(string $name, string $city,)
    {
        parent::__construct($name, $city);
        $this->name = $name;
        $this->city = $city;
    }
}
