<?php
spl_autoload_register("myAutoload");

function myAutoload($classname){
	$path="classes/";
	$extention=".class.php";
	include $path.$classname.$extention;
}