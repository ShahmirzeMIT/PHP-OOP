<?php

class GetDat{
public $name;
public $pass;

public function __construct($ad,$sifre){
	$this->name=$ad;
	$this->pass=$sifre;
}

public function ShowData(){
	return ("My Name is {$this->name} Password is {$this->pass}");
}

}
 

