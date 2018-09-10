<?php 
use model\amount as modelAmount;
require_once ('C:\xampp\htdocs\sandbox\collection\amount.php');

$amount01 = new modelAmount\jpy(37867);
print_r($amount01 -> getAmount());
?>