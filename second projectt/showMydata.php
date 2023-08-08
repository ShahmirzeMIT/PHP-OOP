<?php
include "includes/class-autoload.inc.php";

$name=$_POST['name'];
$email=$_POST['email'];
$pass=$_POST['pass'];


$show=new Show($name,$email,$pass);
echo $show->pickOut();