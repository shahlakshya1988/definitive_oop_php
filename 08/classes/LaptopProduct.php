<?php
class LaptopProduct extends  Product{
    public $cpu;
    public function __construct($name, $price,$cpu)
    {
        parent::__construct($name, $price);
        $this->cpu = $cpu;
    }
    public function getProduct(){
        $string = parent::getProduct();
        $string.=PHP_EOL."CPU ".$this->cpu;
        return $string;
    }
}