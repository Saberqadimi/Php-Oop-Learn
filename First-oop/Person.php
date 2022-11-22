<?php

class Person{
    
    public $name = 'SaberQadimi';
    
    private $age;

    public function setName($name){
        echo "Name:$name" . PHP_EOL;
        
    }

    public function setAge($value){
        $this->age = $value;
    }

}


class Programmer extends Person{
    
    public function code(){
        echo 'coding...' ;
    }
}
$saber=new Programmer();
// var_dump($saber)
echo $saber->name . " ";
 $saber->setAge(27); 
 $saber->code();










?>