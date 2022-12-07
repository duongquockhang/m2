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
    <h2>Đăng ký ngươi dùng</h2>
    <table>
        <tr>
            <td>Ten nguoi dung:</td>
            <td><input type="text" name="userName" placeholder="nhap ten"></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><input type="text" name="mail" placeholder="nhap email"></td>
        </tr>
        <tr>
            <td>so dien thoai:</td>
            <td><input type="text" name="phone" placeholder="nhap so dien thoai"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="gui"></td>
        </tr>
    </table>
</form>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["userName"];
    $email = $_POST["mail"];
    $phone = $_POST["phone"];

    function saveDataJSON($filename,$name1,$email1,$phone1) {

        try{
            if(empty($name1)) throw new Exception("Vui lòng nhập tên người dùng");
            if(empty($email1)) throw new Exception("Vui lòng nhập địa chỉ email");
            if(filter_var($email1, FILTER_VALIDATE_EMAIL) === false) throw new Exception("Địa chỉ email không hợp lệ");
            if(empty($phone1)) throw new Exception("Vui lòng nhập số điện thoại");
        }
        catch( Exception $e) {
            echo $e ->getMessage();
            die();
        }
       $contact = ["userName"=>$name1,
                    "mail"=>$email1,
                     "phone"=>$phone1];
       $dataFile = file_get_contents($filename);
       $dataJson = json_decode($dataFile);
    //    echo $dataJson;
       array_push($dataJson,$contact);
       $json1 = json_encode($dataJson);
      return file_put_contents($filename,$json1);
    }
     saveDataJSON('data.json',$name,$email,$phone);
}
?>
</body>
</html>