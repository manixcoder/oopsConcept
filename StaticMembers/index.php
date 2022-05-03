<?php

use derived as GlobalDerived;

class base{
    public static $name="Manish";

}

class derived extends base{
    public static function show(){
        echo parent::$name;
    }
}

$test = new derived();
$test->show();
