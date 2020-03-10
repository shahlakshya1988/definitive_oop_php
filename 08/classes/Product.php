<?php
class Product{
    public $name;
    public $price;
    public function __construct($name,$price){
        $this->name = $name;
        $this->price = $price;
    }
    public function getProduct(){
        $string=PHP_EOL."===== Product Details =====".PHP_EOL;
        $string.=PHP_EOL."Product Name ".$this->name;
        $string.=PHP_EOL."Product Price ".$this->price;
        return $string;
    }
}