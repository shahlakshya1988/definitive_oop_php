<?php
ABSTRACT class Product{
    public $name;
    protected $price;
    
    private $discount = 10;
    /**
     * CAN BE ACCESSED FROM ANY WHERE
     */
    public $public = "PUBLIC";

    /**
     * ACCESSED ONLY IN THIS CLASS AND ITS CHILD CLASS
     */
    protected $protected = "PROTECTED";
    
    /**
     * ACCESSED ONLY IN THIS CLASS ONLY
     */
    private $private = "PRIVATE"; 

    public function __construct($name,$price){
        $this->name = $name;
        $this->price = $price;
        // var_dump($this->public);
        // var_dump($this->protected);
        // var_dump($this->private);
    }
    public function getProduct(){
        $string=PHP_EOL."======PRODUCT DETAILS======".PHP_EOL;
        $string.="Name {$this->name}".PHP_EOL;
        $string.="Price {$this->getPrice()}".PHP_EOL;
        return $string;
    }
    public function getPrice(){
        $string=PHP_EOL."==== Product Price ====".PHP_EOL;
        $string.="Product Without Discount => ".$this->price.PHP_EOL;
        $string.="Product Price => ".($this->price - (($this->discount/100) * $this->price ));
        return $string;
    }
    public function getDiscount(){
        return $this->discount;
    }
    public function setDiscount($discount){
        $this->discount = $discount;
    }
	const TEST1 = "Product";
	/**
	abstract method can't have method **/
	abstract protected function addProduct($name,$price); 
}