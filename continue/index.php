<?php
include "abstract/payment.abstract.php";
include "classes/BuyProduct.class.php";


$buyProduct= new BuyProduct();
echo $buyProduct->getPayment();