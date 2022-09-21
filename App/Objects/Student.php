<?php

namespace App\Objects;

spl_autoload_register();



use DateTime;

class Student extends Person {

public DateTime $birthDate;
public string $grade;

public function __construct(string $firstname,string $lastname,DateTime $birthDate,School $school,string $grade)
{
    parent::__construct( $firstname, $lastname, $school);
    $this->birthDate=$birthDate;
    $this->grade=$grade;
}


public function getBirthDate():DateTime{
    return $this->birthDate;
}
public function setBirthDate(DateTime $birthDate):void{
   $this->birthDate = $birthDate;
}
public function getGrade():string{
    return $this->grade;
}
public function setGrade($grade):void{
     $this->grade = $grade;
}
public function getAge():int{
  return ($this->birthDate->diff(new DateTime()))->format('%y');
}

public function presentYourself():string{
    return "Bonjour, je m'appelle ".$this->getFirstName()." ".$this->getlastName().", j'ai ".$this->getAge()." ans et je vais à l'école ".$this->getSchool()->getName()." en classe de ".$this->getGrade().".";
}
}