<?php
class BookProduct extends Product implements I3D{
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
	/**
	can't be private***/
	/** number of parameters should match, or make it optional***/
	public function addProduct($name,$price,$numpages=0){
		var_dump($name);
		var_dump($price);
		var_dump($numpages);
	}
	/* const TEST = "BookProduct"; */
	// const test2 = "Test Interface"; // Error
	public function test(){
		var_dump(self::test2);
		var_dump(self::TEST);
	}
}