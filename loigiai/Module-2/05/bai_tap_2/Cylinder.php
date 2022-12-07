<?php
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
?>