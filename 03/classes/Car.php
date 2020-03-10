<?php
class Car{
    public $color;
    public $wheels = 4;
    public $speed = 180;
    public $brand;

    public function getCarInfo(){
        $string=PHP_EOL;
        $string.="<h3>About My Car: </h3>".PHP_EOL;
        $string.="Brand : {$this->brand} ".PHP_EOL;
        $string.="Wheels : {$this->wheels} ".PHP_EOL;
        $string.="Speed : {$this->speed} ".PHP_EOL;
        $string.="Color : {$this->color} ".PHP_EOL;
        return $string;
    }
}