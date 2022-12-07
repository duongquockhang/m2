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
        include("point3D.php");
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