<?php 
require_once __DIR__.DIRECTORY_SEPARATOR."classes".DIRECTORY_SEPARATOR."Product.php";
require_once __DIR__.DIRECTORY_SEPARATOR."classes".DIRECTORY_SEPARATOR."I3D.php";
require_once __DIR__.DIRECTORY_SEPARATOR."classes".DIRECTORY_SEPARATOR."BookProduct.php";

function debug($data){
	echo PHP_EOL.print_r($data,1).PHP_EOL;
}
$book = new BookProduct("PHP Made Easy",2500,200);
debug($book);
echo $book->getProduct();
$book->test();
/*
** Product is now Abstract
$product = new Product("Test Product",1);
debug($product);
$product->getProduct(); */