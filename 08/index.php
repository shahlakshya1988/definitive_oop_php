<?php
require_once __DIR__.DIRECTORY_SEPARATOR."classes".DIRECTORY_SEPARATOR."Product.php";
require_once __DIR__.DIRECTORY_SEPARATOR."classes".DIRECTORY_SEPARATOR."LaptopProduct.php";
require_once __DIR__.DIRECTORY_SEPARATOR."classes".DIRECTORY_SEPARATOR."BookProduct.php";
$p1 = new LaptopProduct("Dell Studio 1535",10000,"i7");
echo $p1->getProduct();

$p2 = new BookProduct("PHP Made Easy",1500,89);
echo $p2->getProduct();