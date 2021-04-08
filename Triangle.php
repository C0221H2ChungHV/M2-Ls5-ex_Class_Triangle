<?php
include_once('Shape.php');

class Triangle extends Shape
{
    public float $side1;
    public float $side2;
    public float $side3;
    public function __construct($name,$color,$side1=1.0,$side2=1.0,$side3=1.0)
    {
        parent::__construct($name,$color);
        $this->side1 = $side1;
        $this->side2 = $side2;
        $this->side3 = $side3;
    }

    public function setSide1($side1)
    {
        $this->side1=$side1;
    }
    public function setSide2($side2)
    {
        $this->side2=$side2;
    }
    public function setSide3($side3)
    {
        $this->side3=$side3;
    }

    public function getArea()
    {
        $p=($this->side1+$this->side2+$this->side3)/2;
        return sqrt($p*($p-$this->side1)*($p-$this->side2)*($p-$this->side3));
    }
    public function getPerimeter()
    {
        return $this->side1+$this->side2+$this->side3;
    }
    public function toString()
    {
        echo "Mau sac: ".$this->color."<br/>";
        echo "Chu vi la: ".$this->getPerimeter()."<br/>";
        echo "Dien tich la: ".$this->getArea();
    }
}