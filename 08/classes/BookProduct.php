<?php
class BookProduct extends  Product{
    public $noofpages;
    public function __construct($name, $price,$noofpages)
    {
        parent::__construct($name, $price);
        $this->noofpages = $noofpages;
    }
    public function getProduct(){
        $string = parent::getProduct();
        $string.=PHP_EOL."Pages ".$this->noofpages;
        return $string;
    }
}