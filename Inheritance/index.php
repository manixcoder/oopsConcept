<?php
class employee
{
    public $name;
    public $age;
    public $salary;

    function __construct($n, $a, $s)
    {
        $this->name = $n;
        $this->age = $a;
        $this->salary = $s;
    }

    function info()
    {
        echo "<h3>Employee Profile</h3>";
        echo "Employee Name :" . $this->name . "</br>";
        echo "Employee Age :" . $this->age . "</br>";
        echo "Employee Salery :" . $this->salary . "</br>";
    }
}


class manager extends employee
{
    public $ta = 1000;
    public $phone = 300;
    public $totalSalary;

    function info()
    {
        $this->totalSalary = $this->salary + $this->ta + $this->phone;
        echo "<h3>Manager Profile</h3>";
        echo "Manager Name :" . $this->name . "</br>";
        echo "Manager Age :" . $this->age . "</br>";
        echo "Manager Salery :" . $this->totalSalary . "</br>";
    }
}

$e1 = new employee("Ram Kumar", 25, 25000);
$e2 = new manager("Krish", 28, 35000);
$e1->info();
$e2->info();
