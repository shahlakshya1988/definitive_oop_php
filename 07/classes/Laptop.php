<?php
class Laptop extends Product{
    public $cpu;
    public $ram;
    public $memory;
    public function __construct($name, $price, $discount, $taxes,$cpu,$ram,$memory)
    {
        parent::__construct($name, $price, $discount, $taxes);
        $this->cpu = $cpu;
        $this->ram = $ram;
        $this->memory = $memory;
    }
    public function printProduct(){
        $string =PHP_EOL."Laptop Class".PHP_EOL;
        $string.="Name : {$this->name}".PHP_EOL;

        $string.="Price : {$this->price}".PHP_EOL;
        $string.="Discount : {$this->discount}".PHP_EOL;
        $string.="Taxes : {$this->taxes}".PHP_EOL;

        $string.="CPU : {$this->cpu}".PHP_EOL;
        $string.="Ram : {$this->ram}".PHP_EOL;
        $string.="Memory : {$this->memory}".PHP_EOL;
        return $string;
    }
}