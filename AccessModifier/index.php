<?php
class base{

    // public ,protected and private
    public $name;

    public function __construct($n)
    {
        $this->name = $n;        
    }

    public function show(){
        echo "Your Name : ".$this->name."<br>";
    }
}

$test = new base("Manish Kumar Pathak");
$test->show();
?>