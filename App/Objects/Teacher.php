<?php
namespace App\Objects;
spl_autoload_register();


class Teacher extends Person {

    
    public array $listOfCourse=[];
    public School $school;
    public function __construct(string $firstname,string $lastname,School $school,array $listOfCourse=[])
    {
        parent::__construct( $firstname, $lastname, $school);
        $this->listOfCourse=$listOfCourse;
        
    }
    

    public function addCourse(string $course) :void{
        if(in_array($course,$this->listOfCourse))  return;
        $this->listOfCourse[]=$course;
    }
    public function removeCourse(string $course) :void{
       array_splice($this->listOfCourse,array_search($course,$this->listOfCourse),1);
    }
    public function getListOfCourse():string{
        return implode(", ",$this->listOfCourse);
    }
    public function presentYourself():string{
        return "Bonjour, je m'appelle ".$this->getFirstName()." ".$this->getlastName().", et j'enseigne à l'école ".$this->getSchool()->getName()." en classe de ".$this->getListOfCourse().".";
    }
}
?>