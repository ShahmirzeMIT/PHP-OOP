<?php
include "getData.php";
$name=$_POST["name"];
$pass=$_POST['pass'];

$show=new GetDat($name,$pass);
echo $show->ShowData();