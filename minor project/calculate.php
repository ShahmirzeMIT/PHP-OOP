<?php

include "includes/class-autoload.inc.php";

$oper = $_GET['operator'] ?? 'add';
$num1 = $_GET['num1'] ?? 0;
$num2 = $_GET['num2'] ?? 0;

$calculator = new Calculator($oper, (int) $num1, (int) $num2);

$result = $calculator->calculate();

echo $result;
