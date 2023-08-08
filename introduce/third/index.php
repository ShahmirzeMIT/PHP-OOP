<?php
// statctic type
class People{
	public $name;
	public $age;
	public $height;
	public static $drinkAge=21;
	
	public function __construct($ad,$yas,$boy){
		$this->name=$ad;
		$this->age=$yas;
		$this->height=$boy;
	}


	public static function SetDrinkAge($newAge){
		self::$drinkAge=$newAge;
	}

}


$Rasul=new People('Resul', 20,194);

echo $Rasul->name ."<br/>".$Rasul->age ."<br/>". $Rasul->height;