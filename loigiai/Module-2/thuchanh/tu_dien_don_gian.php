<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Document</title>
    <style>
        input[type=text] {
            width: 300px;
            font-size: 16px;
            border: 2px solid #ccc;
            border-radius: 4px;
            padding: 12px 10px 12px 10px;
        }
        #submit {
            border-radius: 2px;
            padding: 10px 32px;
            font-size: 16px;
        }
    </style>
</head>
<body>
<h2>Từ Điển Anh - Việt</h2>
<form method='POST'>
    <input type="text" name="search" placeholder="Nhập từ cần tìm"/>
    <input type="submit" id="submit" value="Tìm"/>
</form>
</body>
</html>
<br>
<?php
$dictionary = [
        "hello" => "xin chào",
        "how" => "thế nào", 
        "book" => "quyển sách", 
        "computer" => "máy tính",
        "love" => "yêu",
        "rice" => "cơm",
        "melon" => "dưa hấu",
        "chicken" => "con gà",
        "duck" => "con vịt",
        "elephant" => "con voi",
        "apple" => "quả táo",
        "dog" => "con chó",
        "computer" => "máy vi tính",
        "clock" => "đồng hồ",
        "tree" => "cái cây",
        "banana" => "quả chuối",
        "school" => "trường học",
        "hospital" => "bệnh viện",
        "fish" => "con cá",
        "cat" => "con mèo",
        "bird" => "con chim",
        "dragon" => "con rồng",
        "angel" => "thiên thần",
        "devil" => "ác quỷ",
        "baby" => "em bé",
        "car" => "xe hơi",
        "thanks" => "cảm ơn",
        "sorry" => "xin lỗi",
        "planes" => "máy bay"
];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $searchWord = $_POST["search"];
    $flag = 0;
    foreach ($dictionary as $word => $description) {
        if ($word == $searchWord) {
            echo "Từ: " . $word . ". <br/>Nghĩa của từ: " . $description;
            echo "<br/>";
            $flag = 1;
        }
    }

    if ($flag == 0) {
        echo "Không tìm thấy từ cần tra.";
    }
}
?>