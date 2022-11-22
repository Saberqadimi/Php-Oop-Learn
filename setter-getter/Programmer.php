<?php


class Programmer
{

    public $name;
    private $incomePrice;
    private $nationalCode;
    protected $skill;

    public function __construct($name , $skill)
    {
        $this->name = $name;
        $this->skill = $skill;
        $this->setNationalCode(rand(1000 , 9999));
    }

    #setter method
    public function setNationalCode($nationalCode)
    {
        $this->nationalCode = $nationalCode;
    }

    public function setIncomePrice($incomePrice)
    {
        $this->nationalCode = $incomePrice;
    }

    public function setSkill($skill)
    {
        $this->skill = $skill;
    }


    #getter method

    public function getNationalCode()
    {
     return   $this->nationalCode;
    }

    public function getIncomePrice()
    {
     return   $this->nationalCode;
    }

    public function getSkill()
    {
      return  $this->skill;
    }
}

$saber = new Programmer('mohammadSaber' , 'Laravel');

echo $saber->name .PHP_EOL;
echo $saber->getNationalCode() .PHP_EOL;
$saber->setIncomePrice(12000000);
echo $saber->getIncomePrice() .PHP_EOL;
echo $saber->getSkill() .PHP_EOL;







#ddd