<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Document</title>
</head>
<body>
<form action="" method="post">
    <input type="number" name="inp"><br>
    <p>Nhập phần tử cần xóa</p>
    <button>xóa</button>
</form>
<?php
$arr=[0,1,5];
if ($_SERVER['REQUEST_METHOD']=='POST'){
    $num=$_POST['inp'];
    for ($i=0;$i<count($arr);$i++){
        if ($num==$arr[$i]){
            array_push($arr,0);
            array_splice($arr,$i,1);
        }
    }
    var_dump($arr);
    
}
?>
</body>
</html>