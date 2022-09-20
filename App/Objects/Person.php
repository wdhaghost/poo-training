<?php
namespace App\Objects;
abstract class Person{
    public string $firstname;
    public string $lastname;
    public School $school;

    public function __construct(string $firstname, string $lastname,School $school)
{
$this->firstname = $firstname;
$this->lastname = $lastname;
$this->school = $school;
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
public function setLastName($firstname):void{
    $this->firstname = $firstname;
}
public function getSchool():School{
    return $this->school;
  }


}
