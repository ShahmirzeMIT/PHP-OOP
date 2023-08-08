<?php

class GoodBye{
	const  Leaving_message="hi can you call on me from outside";

	public function Call(){
		echo self::Leaving_message;
	}
}

$newGoodBye=new GoodBye();
echo $newGoodBye->Call()."<br/>";
echo GoodBye::Leaving_message;