<?php

namespace App\Objects;

spl_autoload_register();



use DateTime;

class Student extends Person {

public DateTime $birthDate;
public string $course;

public function __construct(string $firstname,string $lastname,DateTime $birthDate,School $school,string $course)
{
    parent::__construct( $firstname, $lastname, $school);
    $this->birthDate=$birthDate;
    $this->course=$course;
}


public function getBirthDate():DateTime{
    return $this->birthDate;
}
public function setBirthDate(DateTime $birthDate):void{
   $this->birthDate = $birthDate;
}
public function getCourse():string{
    return $this->course;
}
public function setCourse($course):void{
     $this->course = $course;
}
public function getAge():int{
  return ($this->birthDate->diff(new DateTime()))->format('%y');
}

public function presentYourself():string{
    return "Bonjour, je m'appelle ".$this->getFirstName()." ".$this->getlastName().", j'ai ".$this->getAge()." ans et je vais à l'école ".$this->getSchool()." en classe de ".$this->getCourse().".";
}
}