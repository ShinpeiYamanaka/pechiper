<?php 
use model\user as modelUser;
require_once ('C:\xampp\htdocs\sandbox\model\user.php');

$member01 = new modelUser\member("shinpei");
print_r($member01 -> getName());

?>