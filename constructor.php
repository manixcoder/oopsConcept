<?php

class Person
{
    public $name;
    public $age;

    function __construct($name = "No Name", $age = 20)
    {
        $this->name = $name;
        $this->age = $age;
    }

    function show()
    {
        echo $this->name . " - " . $this->age;
    }
}

$p1 = new Person("Manish", 35);

$p1->show();
