<?php
use classes\BookProduct as BookProduct;
use classes\LaptopProduct as LaptopProduct;
use classes\interfaces\IGadget as IGadget;
use classes\interfaces\I3D as I3D;
function autoloader1($class){
    //var_dump($class); die();
    var_dump($class);
    $class = str_replace("\\","/",$class);
    var_dump($class);
    $file = __DIR__.DIRECTORY_SEPARATOR.$class.".php";
    var_dump($file); 
    if(file_exists($file)){
        require_once $file;
    }
    // exit($file);
}
function autoloader2($class){
    
    $file = __DIR__.DIRECTORY_SEPARATOR."classes".DIRECTORY_SEPARATOR."interfaces".DIRECTORY_SEPARATOR.$class.".php";

    var_dump($file); 
    if(file_exists($file)){
        require_once $file;
    }
    // exit($file);
}
spl_autoload_register("autoloader1");
// spl_autoload_register("autoloader2");

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

class A{}
class B extends A{}
class C{}

$a = new A();
$b = new B();
$c = new C();

var_dump($book instanceof IGadget);