<?php
include('point2d.php');
class Point3d extends Point2d
{
    public $z;
    public function __construct($x = 0.0, $y = 0.0, $z = 0.0)
    {
        parent::__construct($x, $y);
        $this->z = $z;
    }
    public function getZ()
    {
        return $this->z;
    }
    public function setZ($z)
    {
        $this->z = $z;
    }
    public function setXYZ($x, $y, $z)
    {
        $this->__construct($x, $y, $z);
    }
    public function getXYZ()
    {
        return array($this->x, $this->y, $this->z);
    }
    public function toString()
    {
        return "($this->x,$this->y,$this->z)";
    }
}
?>