<?php
$subject1 = "a@gmail.com";
$subject2 = "ab@yahoo.com";
$subject3 = "abc@hotmail.com";
$subject4 = "@gmail.com";
$subject5 = "@#abc@gmail.com";
$subject6 = "ab@gmail.";
// truyền vào địa chỉ email hợp lệ/không hợp lệ\
function pregmatch($email)
{
    $pattern = '/^[A-Za-z0-9]+[A-Za-z0-9]*@[A-Za-z0-9]+(\.[A-Za-z0-9]+)$/';
    if (preg_match_All($pattern, $email)) {
        echo "email hợp lệ: " .  $email . '<br>';
    } else {
        echo ' email Không hợp lệ: ' . $email . '<br>';
    }
}
pregmatch($subject1);
pregmatch($subject2);
pregmatch($subject3);
pregmatch($subject4);
pregmatch($subject5);
pregmatch($subject6);