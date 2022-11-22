<?php

class A{
    private $privateVar = "A:Private";
    public $publicVar = "A:Public";
    protected $protectedVar = "A:Protected";

    function test(){
        echo $this->privateVar . " | " . $this->publicVar . " | " . $this->protectedVar;
    }
}

class B{

}

class C extends A{
    private $privateVar = "C:Private";

    public function testC(){
        $this->protectedVar = "A:Protected(Modified By C)";
        echo $this->privateVar . " | " . $this->publicVar . " | " . $this->protectedVar;
    }
}

class D extends C{
    private $privateVar = "privateVar from Class D";

    public function testD()
    {
        echo $this->privateVar . " | " . $this->publicVar . " | " . $this->protectedVar;
        
    }

}
class L extends C{

}



// $c1 = new C();
// echo $c1->testC();
$c1 = new D();
echo $c1->testD();