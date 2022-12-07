<?php
$subject = "(84)-(0978489648)";
$subject1 = "(a8)-(22222222)";
function pregMatch($subject)
{
    $pattern = "/(03|05|07|08|09|01[2|6|8|9])+([0-9]{8})\b/";
    if (preg_match($pattern, $subject)) {
        echo "$subject . Số điện thoại hợp lệ . <br /> ";
    } else {
        echo "$subject . Số điện thoại không hợp lệ . <br /> ";
    }
}
pregMatch($subject);
pregMatch($subject1);
