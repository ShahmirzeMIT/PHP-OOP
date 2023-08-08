<?php
class Animal {
    private $name;
    private $age;
    private $legs;

    public function __construct($name, $age, $legs) {
        $this->name = $name;
        $this->age = $age;
        $this->legs = $legs;
    }

    public function getData() {
        return "Name: {$this->name}, Age: {$this->age}, Legs: {$this->legs}";
    }
}

