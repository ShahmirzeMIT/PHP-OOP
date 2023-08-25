<?php

require('../function.php');
$select=new Select();


if(isset($_SESSION['id'])){
	$user=$select->selectUser($_SESSION['id']);
}
else{
	header('Location: ../login.php');
}

?>