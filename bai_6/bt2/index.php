<?php
interface Colorable{
    function howToColor();
}
class Circle {
    protected $radius;
    public function __construct($radius)
    {
        $this->radius = $radius;
    }
    public function calculateArea()
    {
        return pi()*pow($this->radius,2);
    }
    public function calculatePerimeter()
    {
        return 2*pi()*$this->radius;
    }
    public function getName()
    {
        return "Cirlce";
    }
}
class Rectangle {
    protected $height;
    protected $width;
    public function __construct($height,$width)
    {
        $this->height = $height;
        $this->width = $width;
    }
    public function calculateArea()
    {
        return $this->height*$this->width;
    }
    public function calculatePerimeter()
    {
        return 2*($this->height+$this->width);
    }
    public function getName()
    {
        return "Rectangle";
    }
}
class Square extends Rectangle implements Colorable{
    public function __construct($width)
    {
        parent::__construct($width,$width);
    }
    public function getName()
    {
        return "Square";
    }
    function howToColor() {
        return 'Color all four sides..';
    }
}
$Shapes[0] = new Circle(10);
$Shapes[1] = new Rectangle(5,10);
$Shapes[2] = new Square(7);
foreach ($Shapes as $Shape) {
    echo 'Diện tích của '.$Shape->getName().' là: '.$Shape->calculateArea().'<br>';
    if ($Shape instanceof Square) {
        echo 'Square '. $Shape->howToColor().'<br>';
    }
}