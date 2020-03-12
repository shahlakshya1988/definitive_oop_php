<?php 
class A{ 
    public function __construct(){
        echo PHP_EOL."Class A".PHP_EOL;
    }
}
class B extends A{
    public function __construct(){
        echo PHP_EOL."Class B".PHP_EOL;
    }
}
class C{
    public function __construct(){
        echo PHP_EOL."Class B".PHP_EOL;
    }
}

$a = new A();
$b = new B();
$c = new C();
var_dump($a);
var_dump($b);
var_dump($c);
echo PHP_EOL."======= Instance Of ======= ".PHP_EOL;
var_dump($a instanceof A);
var_dump($b instanceof B);
var_dump($c instanceof C);

echo PHP_EOL."======= Instance Of a ======= ".PHP_EOL;
var_dump($a instanceof A);
var_dump($a instanceof B);
var_dump($a instanceof C);
echo PHP_EOL."======= Instance Of b ======= ".PHP_EOL;
var_dump($b instanceof A);
var_dump($b instanceof B);
var_dump($b instanceof C);