<?php
class Book extends Product{
    public $pages;
    public $author;

    public function __construct($name, $price, $discount, $taxes,$pages,$author)
    {
        parent::__construct($name, $price, $discount, $taxes);
        $this->pages = $pages;
        $this->author = $author;
    }
    public function printProduct(){
        $string =PHP_EOL."Books Class".PHP_EOL;
        $string.="Name : {$this->name}".PHP_EOL;
        $string.="Price : {$this->price}".PHP_EOL;
        $string.="Discount : {$this->discount}".PHP_EOL;
        $string.="Taxes : {$this->taxes}".PHP_EOL;

        $string.="Pages : {$this->pages}".PHP_EOL;
        $string.="Author : {$this->author}".PHP_EOL;
        return $string;
    }

}