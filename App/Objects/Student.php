<?php

namespace App\Objects;

use DateTime;

class Student {

public string $firstname;
public string $lastname;
public DateTime $birthDate;
public string $course;
public string $school;
public function __construct(string $firstname,string $lastname,DateTime $birthDate,string $school,string $course)
{
    $this->firstname=$firstname;
    $this->lastname=$lastname;
    $this->birthDate=$birthDate;
    $this->course=$course;
    $this->school=$school;
}

public function getFirstName():string{
    return $this->firstname;
}
public function setFirstName($firstname):void{
     $this->firstname = $firstname;
}
public function getLastname():string{
    return $this->lastname;
}
public function setLastname($lastname):void{
     $this->lastname = $lastname;
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
public function getSchool():string{
  return $this->school;
}
public function presentYourself():string{
    return "Bonjour, je m'appelle ".$this->getFirstName()." ".$this->getlastName().", j'ai ".$this->getAge()." ans et je vais à l'école ".$this->getSchool()." en classe de ".$this->getCourse().".";
}
}