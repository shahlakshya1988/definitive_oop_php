<?php

use wfm\interfaces\IGadget;
use app\{LaptopProduct, BookProduct};

error_reporting(-1);

require_once __DIR__ . '/vendor/autoload.php';

/*function autoloader1($class)
{
    $class = str_replace("\\", '/', $class);
    $file = __DIR__ . '/' . $class . '.php';
    if(file_exists($file)){
        require_once $file;
    }
}

spl_autoload_register('autoloader1');*/

function debug($data){
    echo '<pre>' . print_r($data,1) . '</pre>';
}

function offerCase(IGadget $product){
    echo "<p>We offer a cover for the gadget {$product->getName()}</p>";
}

$book = new BookProduct('Three Musketeers', 20, 1000);
$laptop = new LaptopProduct('Dell', 1000, 'Intel');


offerCase($laptop);



echo $book->getProduct();

$mail = new \PHPMailer\PHPMailer\PHPMailer();
debug($mail);
echo "<br><br><hr>";
debug($laptop);
debug($book);
$laptop->setColor("Green");
echo $laptop->getColor();
var_dump($laptop instanceof TColor);