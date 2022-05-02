<?php
abstract class parentClass{
    public $name;
    abstract protected function calc($a,$b);
}

class child extends parentClass{
    public function calc($c,$d){
        echo $c+$d;
    }
}

$test = new child();
$test->calc(25,35);
