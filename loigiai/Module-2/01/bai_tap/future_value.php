<?php
$InventmentAmount = '';
$YearlyInterestRate = '';
$NumberofYears = '';
$Future = 0;
$flag = false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $InventmentAmount = $_POST['dau_tu'];
    $YearlyInterestRate = $_POST['lai_suat'];
    $NumberofYears = $_POST['nam_dau_tu'];
    for($i = 1; $i <= $NumberofYears; $i++){
        $Future += $InventmentAmount + ($InventmentAmount * $YearlyInterestRate);
    }
    $flag = true;
}
// var_dump($flag);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <h2>Future Value Calculator</h2>
    <form method="POST" action="">
        Số tiền đầu tư: <input type="number" name="dau_tu" placeholder="Nhập số tiền đầu tư ban đầu" value="<?php echo $InventmentAmount ?>">
        Lãi suất năm: <input type="number" name="lai_suat" placeholder="Nhập lãi suất năm" value="<?php echo $YearlyInterestRate ?>">
        Số năm đầu tư: <input type="number" name="nam_dau_tu" placeholder="Nhập số năm đầu tư" value="<?php echo $NumberofYears ?>">
        <input type="submit" value="Tính">
    </form>
    <br>
    <?php echo "Giá trị tương lai nhận được là: $Future"; ?>
</body>
</html>