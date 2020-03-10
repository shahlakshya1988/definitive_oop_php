<?php
require_once __DIR__.DIRECTORY_SEPARATOR."classes".DIRECTORY_SEPARATOR."Car.php";
//$color,$brand,$wheels,$speed
$obj0 = new Car("Yellow","BMW",10,108);
echo $obj0->getCarInfo();
$obj1 = new Car("White","Audi",10,150);
echo $obj1->getCarInfo();
//echo Car::count;\
echo PHP_EOL;
echo Car::$count; // NOTE $ in variable
echo PHP_EOL;
echo Car::getCount();
echo PHP_EOL;
echo $obj1->getCount(); // function can be called
echo PHP_EOL;
//echo $obj1->$count; // var can't be accessed