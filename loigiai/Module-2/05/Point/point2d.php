<?php
class Point2D
{
    public $x;
    public $y;
    public function __construct($x = 0.0, $y = 0.0)
    {
        $this->x = $x;
        $this->y = $y;
    }
    public function getX()
    {
        return $this->x;
    }
    public function setX($x)
    {
        $this->x = $x;
    }
    public function getY()
    {
        return $this->y;
    }
    public function setY($y)
    {
        $this->y = $y;
    }
    public function setXY($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
    public function getXY()
    {
        return array($this->x, $this->y);
    }
    public function toString()
    {
        return "($this->x,$this->y)";
    }
}
?>