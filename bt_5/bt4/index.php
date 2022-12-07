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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thiết kế và triển khai lớp Triangle</title>
</head>
<body>
    <?php
    // include("TriangleClass.php");
    $rectangle1 = new Triangle();
    $rectangle2 = new Triangle(3,4,5);
    echo "<br/> Cạnh 1 của tam giac 1 là :". $rectangle1->get('side1');
    echo "<br/> Cạnh 2 của tam giac 1 là :". $rectangle1->get('side2');
    echo "<br/> Cạnh 3 của tam giac 1 là :". $rectangle1->get('side3');
    echo "<br/> Chu vi của tam giác 1 là :". $rectangle1->getPerimeter();
    echo "<br/> Diện tích của tam giác 1 là :". $rectangle1->getArea();
    echo "<br/>";
    echo "<br/> Cạnh 1 của tam giac 2 là :". $rectangle2->get('side1');
    echo "<br/> Cạnh 2 của tam giac 2 là :". $rectangle2->get('side2');
    echo "<br/> Cạnh 3 của tam giac 2 là :". $rectangle2->get('side3');
    echo "<br/> Chu vi của tam giác 2 là :". $rectangle2->getPerimeter();
    echo "<br/> Diện tích của tam giác 2 là :". $rectangle2->getArea();

    ?>
</body>
</html>