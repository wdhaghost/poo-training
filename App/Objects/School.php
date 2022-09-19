<?php
namespace App\Objects;

class School{
    /*instances*/
    public string $name;
    public string $city;
    protected static array $grades=[];
    public function __construct(string $name,string $city){
        $this->name=$name;
        $this->city=$city;
    }
    /*methods*/
    public function setName(string $name) :void {
        $this->name=$name;
    }

    public function getName(string $name){
      return  $this->name=$name;
    }

    public static function haveGrade(string $grade):string{
        if(in_array($grade,static::$grades)){
            return "oui";
        }
        return "non";
    }
}

?>