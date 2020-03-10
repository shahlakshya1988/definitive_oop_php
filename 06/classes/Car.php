<?php
class Car{
    public $color;
    public $brand;
    public $wheels;
    public $speed;
    public static $count = 0;
    const TYPE="Car";
    public function __construct($color,$brand,$wheels,$speed){
        self::$count++; // NOTE $ in variable
        //var_dump($this);
        //echo PHP_EOL.__METHOD__;
        $this->color = $color;
        $this->brand = $brand;
        $this->wheels = $wheels;
        $this->speed = $speed;
        echo PHP_EOL."Type ::: ".self::TYPE.PHP_EOL;
    }
    public function getCarInfo(){
        echo PHP_EOL."Type ::: ".self::TYPE.PHP_EOL;
        $string=PHP_EOL;
        $string.="<h3>About My Car: </h3>".PHP_EOL;
        $string.="Brand : {$this->brand} ".PHP_EOL;
        $string.="Wheels : {$this->wheels} ".PHP_EOL;
        $string.="Speed : {$this->speed} ".PHP_EOL;
        $string.="Color : {$this->color} ".PHP_EOL;
        return $string;
    }
    public function __destruct(){
        //var_dump($this);
//        echo PHP_EOL.__METHOD__;
    }
    public static function getCount(){
        echo PHP_EOL."Type ::: ".self::TYPE.PHP_EOL;
        return self::$count; // NOTE $ in variable
    }
}