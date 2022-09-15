<?php
namespace App\Objects;

abstract class School{
    public string $name;
    public string $city;
    public function __construct(string $name,string $city){
        $this->name=$name;
        $this->city=$city;
    }
    /**
     * Undocumented function
     *
     * @param string $name
     * @return void
     */
    public function setName(string $name) :void {
        $this->name=$name;
    }

    public function getName(string $name){
      return  $this->name=$name;
    }
}

?>