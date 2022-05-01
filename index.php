<?php

/**
 * PHP OOP Introduction
 * 
 */

class calCulation
{
    public $a, $b, $c;

    function sum()
    {
        $this->c = $this->a + $this->b;
        return $this->c;
    }

    function sub()
    {
        $this->c = $this->a - $this->b;
        return $this->c;
    }
}

$c1 = new calCulation();

$c1->a = 20;
$c1->b = 10;

$c2 = new calCulation();

$c2->a = 50;
$c2->b = 35;

echo "Sum value of c1 : ".$c1->sum() . "<br>";
echo "Sum value of c2 : ".$c1->sub();
