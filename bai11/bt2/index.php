<?php



$low = rand(1,100);
echo $low."<br>";
$high = rand(1,100);
echo $high."<br>";

$number = rand($low, $high);
echo "So ban cho: " . $number . "<br>";
function countGuess($low, $high, $number): int
{
    if ($low > $high){
       return countGuess($high, $low, $number);
    }
    $count = 0;
    while ($low <= $high) {
        $count++;
        $guessNum = rand($low, $high);
        echo $guessNum . ",";

        if ($guessNum > $number) {
            $high = $guessNum - 1;
        } else if ($guessNum < $number) {
            $low = $guessNum + 1;
        } else {
            break;
        }
    }
    return $count;
}

echo "<br>" . "So lan may tinh doan: " . countGuess($low, $high, 20)   ;