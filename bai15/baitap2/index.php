<?php
$account1 = "123abc_";
$account2 = "_abc123";
$account3 = "______";
$account4 = "123456";
$account5 = "abcdefg";
$account6 = ".@";
$account7 = "12345";
$account8 = "1234_";
$account9 = "abcde";
function pregReplace($password){
    $pattern = '/^[_a-z0-9]{6,}$/';
    if ( preg_match($pattern, $password)) {
        echo "email hợp lệ: " .  $password . '<br>';
    } else {
        echo ' email Không hợp lệ: ' . $password . '<br>';
    }
}
pregReplace($account1);
pregReplace($account2);
pregReplace($account3);
pregReplace($account4);
pregReplace($account5);
pregReplace($account6);
pregReplace($account7);
pregReplace($account8);
pregReplace($account9);