<?php
abstract class Shape
{
    public $side1;
    public $side2;
    public $side3;
    public $color;
    abstract function getArea();
    abstract function getPerimeter();
    abstract function toString();
}
class Triangle extends Shape
{
    public function __construct($side1 = 1.0, $side2 = 1.0, $side3 = 1.0)
    {
        $this->side1 = $side1;
        $this->side2 = $side2;
        $this->side3 = $side3;
        $this->color = "blue";
    }
    public function get($side)
    {
        return $this->$side;
    }
    public function getPerimeter()
    {
        return $this->side1 + $this->side2 + $this->side3;
    }
    public function getArea()
    {
        $p = $this->getPerimeter();
        return round(sqrt($p * ($p - $this->side1) * ($p - $this->side2) * ($p - $this->side3)), 3);
    }
    public function toString()
    {
        return "Color is $this->color, Square is " . $this->getArea() . ", Perimeter is " . $this->getPerimeter();
    }
}
?>