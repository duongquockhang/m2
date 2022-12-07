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


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>[Bài tập] Lớp Point2D và lớp Point3D</title>
</head>
<body>
    <?php
        // include("point3D.php");
        $point2d = new Point2D();                
        $point3d = new Point3D();
        echo $point2d->toString();
        echo "<br/>";
        echo $point3d->toString();
        echo "<br/>";
        $point2d_1 = new Point2D(10,10);
        $point3d_1 = new Point3D(10,10,10);
        echo $point2d_1->toString();
        echo "<br/>";
        echo $point3d_1->toString();
        echo "<br/>";
        $point2d_1->setXY(2,5);
        $point3d_1->setXYZ(1,6,2);
        echo $point2d_1->toString();
        echo "<br/>";
        echo $point3d_1->toString();
    ?>
</body>
</html>