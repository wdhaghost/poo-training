<?php
namespace App\Objects;



class Teacher {

    public string $firstname;
    public string $lastname;
    public array $listOfCourse=[];
    public string $school;
    public function __construct(string $firstname,string $lastname,string $school="",array $listOfCourse=[])
    {
        $this->firstname=$firstname;
        $this->lastname=$lastname;
        $this->listOfCourse=$listOfCourse;
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
    public function setLastName($firstname):void{
        $this->firstname = $firstname;
   }
    public function getSchool() :string{
        return $this->school;
    }
    public function setSchool(string $school) :void{
         $this->school= $school;
    }
    public function addCourse(string $course) :void{
        $this->listOfCourse[]=$course;
    }
    public function removeCourse(string $course) :void{
       array_splice($this->listOfCourse,array_search($course,$this->listOfCourse),1);
    }
    public function getListOfCourse():string{
        return implode(", ",$this->listOfCourse);
    }
    public function presentYourself():string{
        return "Bonjour, je m'appelle ".$this->getFirstName()." ".$this->getlastName().", et j'enseigne à l'école ".$this->getSchool()." en classe de ".$this->getListOfCourse().".";
    }
}
?>