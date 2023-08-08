<?php

class Fruit {
	public $name;
	public $color;
 
	function SetName($name) {
	    $this->name = $name;
	}
 
	function GetName() {
	    return $this->name;
	}
 
	function setColor($color) {
	    $this->color = $color;
	}
 
	function get_color() {
	    return $this->color;
	}
 }
 
 $apple = new Fruit();
 $banana = new Fruit();
 $apple->SetName('Apple');
 $banana->SetName('Banana');
 
 $apple->setColor("green");
 $banana->setColor("yellow");
 
 echo $apple->GetName();
 echo "<br/>";
 echo $banana->GetName();
 echo "<br/>";
 echo $apple->get_color();
 echo "<br/>";
 echo $banana->get_color();
 
 
 class Adam {
	public $name;
	public $age;
 }
 
 $sahil = new Adam(); // Create a new instance of the Adam class
 $sahil->name = "Sahil";
 $sahil->age = "20";
 
 echo "<br/>";
 echo $sahil->name ."  ". $sahil->age;
 

class Animal{
	public $name;
	public $run;
	
	public function  Introduce($ad,$qacmaq){
		$this->name=$ad;
		$this->run=$qacmaq;
	}

	public function getData(){
		return array(
			'name' =>$this->name,
			'run' =>$this->run
		);
	}
}
$person1 = new Animal();
$person1->Introduce("Rabbit", 30);
$data=$person1->getData();
echo "<br/>";
echo  "Name:" .$data['name']."<br/>";
echo  "Run:" .$data['run']."<br/>";

?>
