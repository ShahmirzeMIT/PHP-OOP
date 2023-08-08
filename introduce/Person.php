<?php

class Person
{
    public $name;
    public $eyeColor;
    public $age;
    public function setName($name,$eyeColor,$age)
    {
    $this->name=$name;
    $this->eyeColor=$eyeColor;
    $this->age=$age;
    }
    public function GetName(){
        return $this->name . " ".$this->age;
    }
}