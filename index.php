<?php

/**
 * PHP OOP Introduction
 * 
 */

class calCulation
{
    public $a, $b, $c; // propertise

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

    // sum and sub is method
}

$c1 = new calCulation(); // creating object 

$c1->a = 20; //assign value for propertise a
$c1->b = 10; //assign value for propertise b

$c2 = new calCulation();

$c2->a = 50; //assign value for propertise a
$c2->b = 35; //assign value for propertise b

echo "Sum value of c1 : " . $c1->sum() . "<br>";
echo "Sum value of c2 : " . $c1->sub();
