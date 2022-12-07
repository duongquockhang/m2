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
    <p>Nhập chỉ số: </p>
    <input type="number" name="inp">
    <input type="submit">
</form>
<?php
$arr = [];
for ($i = 0; $i < 100; $i++) {
    $number = rand(0,105);
    array_push($arr, $number);
    
    var_dump($number);
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $num = $_POST['inp'];
    try {
        if ($num < 0 || $num >= 100) {
            $exception = new Exception('Chỉ số sai');
            throw $exception;
        }
        echo($arr[$num]);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
?>
</body>
</html