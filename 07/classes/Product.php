<?php
class Product{
    public $name;
    public $price;
    public $discount;
    public $taxes;
    public function __construct($name,$price,$discount,$taxes){
        $this->name = $name;
        $this->price = $price;
        $this->discount = $discount;
        $this->taxes = $taxes;
    }
    public function printProduct(){
        $string =PHP_EOL."Product Class".PHP_EOL;
        $string.="Name : {$this->name}".PHP_EOL;
        $string.="Price : {$this->price}".PHP_EOL;
        $string.="Discount : {$this->discount}".PHP_EOL;
        $string.="Taxes : {$this->taxes}".PHP_EOL;
    }
}