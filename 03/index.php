<?php
require_once  __DIR__.DIRECTORY_SEPARATOR."classes".DIRECTORY_SEPARATOR."Car.php";
$obj = new Car();
echo $obj->getCarInfo();
$obj->brand="BMW";
$obj->color="Blue";
echo $obj->getCarInfo();
$obj1 = new Car();
echo $obj1->getCarInfo();