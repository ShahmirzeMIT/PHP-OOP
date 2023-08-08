<?php

class Show{
	public $name;
	public $email;
	public $pass;

	public function __construct(string $one,string $two,string $three){
		$this->name=$one;
		$this->email=$two;
		$this->pass=$three;
	}

	public function pickOut(){
		return "<h1>{$this->name}  {$this->email}  {$this->pass}</h1>";
	}
}