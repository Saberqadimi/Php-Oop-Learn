<?php

class A
{
    protected $name;
    private $mobile;
    public $email;

    public function __construct()
    {
        $this->name = "saberqadimi ";
        $this->mobile = "09039106953";
        $this->email = "qadimi74@gmail.com";
    }
    
    public function index()
    {
        echo "name: " . $this->name . PHP_EOL. "mobile: " . PHP_EOL. $this->mobile . PHP_EOL.  "email: " . PHP_EOL. $this->email;
    }
}
class B extends A
{
    public function __construct()
    {
        parent::__construct();
        
    }
 
    public function overRight()
    {
        echo "name: " . $this->name  . PHP_EOL.  "email: " . PHP_EOL. $this->email;

    }

}
class C
{

}

$classA = new A();
echo $classA->index();
// echo "".PHP_EOL;
$classB = new B();
echo $classB->overRight();