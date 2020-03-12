<?php

namespace app;

use wfm\interfaces\IGadget;
use wfm\Product;
use wfm\traits\TColor;

class LaptopProduct extends Product implements IGadget
{

    public $cpu;
    use TColor;

    public function __construct($name, $price, $cpu)
    {
        parent::__construct($name, $price);
        $this->cpu = $cpu;
    }

    public function getCase()
    {
        // TODO: Implement getCase() method.
    }

    public function getProduct()
    {
        $out = parent::getProduct();
        $out .= "CPU: {$this->cpu}<br>";
        return $out;
    }

    public function addProduct($name, $price, $numPages = 0)
    {
        // TODO: Implement addProduct() method.
        var_dump($name);
        var_dump($price);
        var_dump($numPages);
    }

}