<?php
$books = ['Văn','Sử','Địa'];
     //     0     1    2

//đưa thêm phần tử vào mảng     
$books[3] = 'Hóa';

//array push
array_push( $books, 'Sinh' );

echo '<pre>';
    print_r( $books );
echo '</pre>';

echo "Số phần tử trong mảng ". count($books);

foreach( $books as $key => $value ){
    echo " <br> Chỉ số {$key} có giá trị là {$value} <br>";
}