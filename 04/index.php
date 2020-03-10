<?php
require_once __DIR__.DIRECTORY_SEPARATOR."classes".DIRECTORY_SEPARATOR."Car.php";
//$color,$brand,$wheels,$speed
$obj0 = new Car("Yellow","BMW",10,108);
echo $obj0->getCarInfo();
$obj1 = new Car("White","Audi",10,150);
echo $obj1->getCarInfo();