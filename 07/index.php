<?php
require_once  __DIR__.DIRECTORY_SEPARATOR."classes".DIRECTORY_SEPARATOR."Product.php";
require_once  __DIR__.DIRECTORY_SEPARATOR."classes".DIRECTORY_SEPARATOR."Laptop.php";
require_once  __DIR__.DIRECTORY_SEPARATOR."classes".DIRECTORY_SEPARATOR."Book.php";
//$name, $price, $discount, $taxes,$cpu,$ram,$memory
$p1 = new Laptop("Dell",50000,2000,18,"i7",16,"1TB");
$p2 = new Book("PHP Easy To Learn",500,200,12,309,"John Doe");
echo $p1 -> printProduct();
echo PHP_EOL;
echo $p2->printProduct();