<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<label for="cars">Choose a car:</label>
<input type="text" name="input"></input>
<select id="cars" name='mode'>
  <option value="usd">USD sang Vnd</option>
  <option value="vn">VND sang USD</option>
  
</select>
<input type="submit" value="Submit"></input>
<?php
     
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $n = $_POST['tinh'];
        $a =  $_POST['a'];
    }
    echo "<br/>Quy đổi sang $n: $a";

?>
</body>
</html>