<?php
class BookProduct extends Product{
    public $numpage;
    public function __construct($name,$price,$numpage){
            parent::__construct($name,$price);
            $this->numpage = $numpage;
            // var_dump($this->public);
            // var_dump($this->protected);
            // var_dump($this->private);
            $this->setDiscount(5);
    }
    public function getProduct(){
        $out = parent::getProduct();
        $out .= PHP_EOL."Number Of Pages {$this->numpage}".PHP_EOL;
        return $out;
    }
}