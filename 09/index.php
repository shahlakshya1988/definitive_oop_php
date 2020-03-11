<?php

require_once __DIR__.DIRECTORY_SEPARATOR."classes".DIRECTORY_SEPARATOR."Product.php";
require_once __DIR__.DIRECTORY_SEPARATOR."classes".DIRECTORY_SEPARATOR."BookProduct.php";
//$p1 = new Product("Product",200);
//echo "<pre>",print_r($p1),"</pre>";
$b1 = new BookProduct("PHP Made Easy",3000,200);
//echo "<pre>",print_r($b1),"</pre>";
//var_dump($b1);
echo $b1->getProduct();
//var_dump($b1->price); // no discount is calculated, don't want to expose price property