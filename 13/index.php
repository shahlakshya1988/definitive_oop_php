<?php
error_reporting(-1);
use app\BookProduct as BookProduct;
use app\LaptopProduct as LaptopProduct;
use wfm\Product;
use wfm\interfaces\I3D;
use wfm\interfaces\IGadget;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require_once __DIR__.DIRECTORY_SEPARATOR."vendor".DIRECTORY_SEPARATOR."autoload.php";

error_reporting(-1);
/*
function autoloader1($class)
{
    $class = str_replace("\\", '/', $class);
    $file = __DIR__ . '/' . $class . '.php';
    if(file_exists($file)){
        require_once $file;
    }
}

spl_autoload_register('autoloader1'); */

function debug($data){
    echo '<pre>' . print_r($data,1) . '</pre>';
}

function offerCase(IGadget $product){
    echo "<p>We offer a cover for the gadget {$product->getName()}</p>";
}

$book = new BookProduct('Three Musketeers', 20, 1000);
$laptop = new LaptopProduct('Dell', 1000, 'Intel');

offerCase($laptop);

debug($book);

echo $book->getProduct();

$mailer = new PHPMailer();
debug($mailer);
