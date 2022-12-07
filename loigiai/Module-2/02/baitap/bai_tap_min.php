<?php
function add_min( $mang_so_nguyen ){
    echo '<pre>';
        print_r( $mang_so_nguyen );
    echo '</pre>';
    $index = 0;
    $min = $mang_so_nguyen[0];
    for( $i = 0; $i < count($mang_so_nguyen); $i++ ){
        if( $mang_so_nguyen[$i] < $min ){
            $min = $mang_so_nguyen[$i];
            $index = $i;
        }
    }
    return $index ;
}

$day_so = [1,5,8,2,6,4];

$chi_so = add_min( $day_so );
echo "Giá trị nhỏ nhất là $day_so[$chi_so] ";
echo "Giá trị được tìm thấy ở vị trí số $chi_so";