<?php
//cách 1
$books = [ 'Văn','Lý','Địa' ];
//cách 2
$books = [];
$books[0] = 'Văn';
$books[1] = 'Lý';
$books[2] = 'Địa';

//cahs 3
$books = [
    0 => 'Văn',
    1 => 'Lý',
    2 => 'Địa'
];

//thay đổi chỉ số của mảng
$books = [
    'sach_van' => 'Văn',
    'sach_ly'  => 'Lý',
    'sach_dia' => 'Địa'
];
echo '<pre>';
    print_r( $books );
echo '</pre>';