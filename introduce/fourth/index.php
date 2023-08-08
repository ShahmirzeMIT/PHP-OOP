	<?php

	class Car {
		public $name;
		public $color;
		public $year;
		public $engine;
		public function __construct($name,$color,$year,$engine){
			$this->name=$name;
			$this->color=$color;
			$this->year=$year;
			$this->engine=$engine;
		}
		protected function intro() {
			echo "The car is {$this->name} and the color is {$this->color}.";
		   }

	}

	class LandCrusier extends Car{
		public function message(){
			echo "that's car crazy {$this->engine}"."<br/>";
			$this->intro();
		}
	}
	$LandCrusier=new LandCrusier("LandCrusier","white","2020","4.5");
	$LandCrusier->message();


	class Fruit {
		public $name;
		public $color;
		public function __construct($name, $color) {
		  $this->name = $name;
		  $this->color = $color;
		}
		 final public function intro() {
		  echo "<br/>" ."The fruit is {$this->name} and the color is {$this->color}.";
		}
	   }
	   
	   class Strawberry extends Fruit {
		public $weight;
		public function __construct($name, $color, $weight) {
		  $this->name = $name;
		  $this->color = $color;
		  $this->weight = $weight;
		}
		public function intro() {
		  echo "<br/>". "The fruit is {$this->name}, the color is {$this->color}, and the weight is {$this->weight} gram.";
		}
	   }
	   
	   $strawberry = new Strawberry("Strawberry", "red", 50);
	   $strawberry->intro();