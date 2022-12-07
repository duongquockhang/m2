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
    <input type="text" name="name">
    <input type="submit" value="check">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nhap = $_POST["name"];
    $arr = explode(',', $nhap);
    for ($i = 0; $i < count($arr); $i++) {
        $arr[$i] = (int)$arr[$i];
    }
    var_dump($arr);

    function min($arr){
        $minValue = $arr[0];
        $minIndex = 0;
        for ($i = 0; $i < count($arr); $i++){
            if ($arr[$i] < $minValue){
                $minValue = $arr[$i];
                $minIndex = $i;
            }
        }
        return $minIndex + 1;
    }
    echo $minValue;
    min($arr);
}
?>
</body>
</html> 