<?php

$myArr = [2, 3, 2, 5, 6, 1, -2, 3, 14, 12];
$count = count($myArr);
$t = 0;
for ($i = 0; $i < $count; $i++) {
    for ($j = 0; $j < $count - $i - 1; $j++) {
        if ($myArr[$j] < $myArr[$j + 1]) {
            $temp = $myArr[$j + 1];
            $myArr[$j + 1] = $myArr[$j];
            $myArr[$j] = $temp;
        }
    }
}
for ($i = 0; $i < $count; $i++) {
    echo $myArr[$i] . " ";
}