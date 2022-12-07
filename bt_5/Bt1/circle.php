<?php
class Circle
{
    public $radius;
    public $color;
    public function __construct($color, $radius)
    {
        $this->radius = $radius;
        $this->color = $color;
    }
    public function get($propertyName)
    {
        return $this->$propertyName;
    }
    public function set($propertyName, $propertyValue)
    {
        $this->$propertyName = $propertyValue;
    }
    public function calculatePerimeter()
    {
        return pi() * $this->radius * 2;
    }
    public function calculateArea()
    {
        return pi() * pow($this->radius, 2);
    }
}
class Cylinder extends Circle
{
    public $height;
    public function __construct($color, $radius, $height)
    {
        $this->color = $color;
        $this->radius = $radius;
        $this->height = $height;    
    }
    public function calculateArea()
    {
        return parent::calculateArea() * 2 + $this->height * parent::calculatePerimeter();
    }
    public function calculateVolume()
    {
        return parent::calculateArea() * $this->height;
    }
}