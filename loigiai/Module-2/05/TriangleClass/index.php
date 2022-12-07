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
    include("TriangleClass.php");
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