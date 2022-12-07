<?php
$arr = [
    [1,2,4,5],
    [3,5,6,7],
    [2,4,6,8]
];
$max = $arr[0][0];

// echo $max;
for ($i = 0; $i < count($arr); $i++){
    // echo count($arr). '<br />';
    for ($j = 0; $j < count($arr[$i]); $j++){
        if ($arr[$i][$j] > $max){
            $max = $arr[$i][$j];
        }
    }
    
}
// dd(($arr));

echo $max;
// $test = 'app123/upload124/order/ML07-014/reg1yy23.csv';

// $result = substr($test, 0, -7);
// echo '<pre>';
//     print_r( $result );
// echo '</pre>';
