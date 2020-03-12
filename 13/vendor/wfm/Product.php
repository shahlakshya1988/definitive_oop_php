<?php

namespace wfm;

abstract class Product
{

    private $name;
    protected $price;

    private $discount = 10;

    const TEST = 10;

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function getProduct()
    {
        return "<hr><b>About the product:</b><br>
			Name: {$this->name}<br>
			Discount price: {$this->getPrice()}<br>";
    }

    public function getPrice()
    {
        return $this->price - ($this->discount / 100 * $this->price);
    }

    /**
     * @return int
     */
    public function getDiscount(): int
    {
        return $this->discount;
    }

    /**
     * @param int $discount
     */
    public function setDiscount(int $discount)
    {
        $this->discount = $discount;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    abstract protected function addProduct($name, $price);

}