<?php
class Car{
    public $color;
    public $brand;
    public $wheels;
    public $speed;
    public function __construct($color,$brand,$wheels,$speed){
        //var_dump($this);
        //echo PHP_EOL.__METHOD__;
        $this->color = $color;
        $this->brand = $brand;
        $this->wheels = $wheels;
        $this->speed = $speed;
    }
    public function getCarInfo(){
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
        echo PHP_EOL.__METHOD__;
    }
}