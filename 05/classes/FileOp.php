<?php
class FileOp{
    public $file;
    public $handle;
    public function __construct($file){
        $this->file = $file;
        // we will check if the file is writable
        if(!is_writable($this->file)){
            echo PHP_EOL."The File {$this->file} is not writable".PHP_EOL;
            die();
        }else{
            echo PHP_EOL."The File {$this->file} is writable".PHP_EOL;
            $this->handle = fopen($this->file,"a");
        }
        // we will check if the file is writable
//        echo PHP_EOL.$this->file.PHP_EOL;
    }
    public function writetofile($txt){
        $txt = "\n\r{$txt}\n\r";
        if(!fwrite($this->handle,$txt)){
            echo PHP_EOL."The File {$this->file} is not writable".PHP_EOL;
        }
    }
    public function  __destruct(){
         @fclose($this->handle);
    }

    public function write($string){

    }
}