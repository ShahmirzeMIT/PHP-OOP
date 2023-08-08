<?php

class Human{
	public $name;
	public $age;
	public $height;

	public function __construct($ad,$yas,$boy){
		$this->name=$ad;
		$this->age=$yas;
		$this->height=$boy;
	}

}


$Rasul=new Human('Resul', 20,194);
echo $Rasul->name ."<br/>".$Rasul->age ."<br/>". $Rasul->height;