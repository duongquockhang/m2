<?php
class Point
{
    private $x;
    private $y;
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
class MoveablePoint extends Point
{
    private $xSpeed;
    private $ySpeed;
    public function __construct($xSpeed = 0.0, $ySpeed = 0.0, $x = 0.0, $y = 0.0)
    {
        parent::__construct($x, $y);
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }
    public function getXSpeed()
    {
        return $this->xSpeed;
    }
    public function setXSpeed($xSpeed)
    {
        $this->xSpeed = $xSpeed;
    }
    public function getYSpeed()
    {
        return $this->ySpeed;
    }
    public function setYSpeed($ySpeed)
    {
        $this->ySpeed = $ySpeed;
    }
    public function getSpeed()
    {
        return array($this->xSpeed, $this->ySpeed);
    }
    public function setSpeed($xSpeed, $ySpeed)
    {
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }
    public function toString()
    {
        return parent::toString() . "speed=($this->xSpeed,$this->ySpeed)";
    }
    public function move()
    {
        parent::setX(parent::getX() + $this->xSpeed);
        parent::setY(parent::getY() + $this->ySpeed);
        return $this;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Point and Moveable</title>
</head>

<body>
    <?php
    // require 'class.php';
    $objPoint1 = new Point(2, 2);
    echo print_r($objPoint1->getXY());
    echo "<br/>Point1: " . $objPoint1->toString();
    $objMovablePoint1 = new MoveablePoint();
    echo "<br/>MP1: " . $objMovablePoint1->toString();
    $objMovablePoint2 = new MoveablePoint(5, 10);
    echo "<br/>MP2: " . $objMovablePoint2->toString();
    $objMovablePoint3 = new MoveablePoint(5, 10, 15, 20);
    echo "<br/>MP3: " . $objMovablePoint3->toString();
    echo "<br/>";
    var_dump($objMovablePoint3->move());
    ?>
</body>

</html>