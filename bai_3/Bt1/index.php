<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    a: <input type="text" name="a" placeholder="nhap a">
    b: <input type="text" name="b" placeholder="nhap b">
    c: <input type="text" name="c" placeholder="nhap c">
    <input type="submit" value="check">
</form>
</body>
</html>
<?php
// include("QuadraticEquation.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_REQUEST["a"];
    $b = $_REQUEST["b"];
    $c = $_REQUEST["c"];

    $quadra = new QuadraticEquation($a, $b, $c);
    $quadra->getA();
    $quadra->getB();
    $quadra->getC();

    echo "denta = " . $quadra->getDiscriminant() . "<br/>";

    $quadra->getRoot();

}


class QuadraticEquation
{
    /**
     * @var
     */
    private $a;
    private $b;
    private $c;

    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function getA()
    {
        return $this ->a;
    }

    public function setA($a)
    {
        $this -> a = $a;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getB()
    {
        return $this->b;
    }

    /**
     * @param mixed $b
     * @return QuadraticEquation
     */
    public function setB($b)
    {
        $this->b = $b;
        return $this;
    }

    /**
     * @return mixed
     */

     
    public function getC()
    {
        return $this->c;
    }

    /**
     * @param mixed $c
     * @return QuadraticEquation
     */
    public function setC($c)
    {
        $this->c = $c;
        return $this;
    }

    public function getDiscriminant()
    {
        return $denta = ($this->b * $this->b) - (4*$this->a * $this->c);
    }

    public function getRoot()
    {
        $denta = $this->getDiscriminant();
        if ($denta < 0){
            echo "The equation has no roots";
        } elseif ($denta == 0){
           echo ((-$this->b)/(2*$this->a));
        }else {
            echo ((-$this->b + sqrt($denta))/2*$this->a) ." and ". ((-$this->b - sqrt($denta))/2*$this->a);
        }
    }
}