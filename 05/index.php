<?php
error_reporting(-1);
require_once __DIR__.DIRECTORY_SEPARATOR."classes".DIRECTORY_SEPARATOR."FileOp.php";
$filename = __DIR__.DIRECTORY_SEPARATOR."file.txt";
$file = new FileOp($filename);
//echo $file->file;
$file->writetofile("Something ".time());

$filename1 = __DIR__.DIRECTORY_SEPARATOR."file3.txt";
$file1 = new FileOp($filename1);
//echo $file->file;
$file1->writetofile("Something ".time());