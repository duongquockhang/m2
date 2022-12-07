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