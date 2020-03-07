<?php 
class FirstClass{
    public $name;
    public function __construct()
    {
        $this->name = $this;
        var_dump($this->name);
    }
}