<?php 
class Bracket
{
    public array $stack;

    public function __construct()
    {
        $this->stack = array();
    }

    public function isEmpty(): bool
    {
        return empty($this->stack);
    }

    public function Bracket($string): bool
    {
        $len = strlen($string);
        for ($i = 0; $i < $len; $i++) {
            switch ($string[$i]) {
                case '(':
                    array_push($this->stack, 0);
                    break;
                case ')':
                    if ($this->isEmpty()) {
                        return false;
                    } else {
                        if (array_pop($this->stack) != 0)
                            return false;
                        break;
                    }
                case '[':
                    array_push($this->stack, 1);
                    break;
                case ']':
                    if ($this->isEmpty()) {
                        return false;
                    } else {
                        if (array_pop($this->stack) != 1)
                            return false;
                        break;
                    }
                default:
                    break;
            }
        }
     
        
    
    // return (empty($stack));
        
        return $this->isEmpty();
    }

    public function isTrue($string)
    {
        if ($this->Bracket($string)) {
            echo "Chuẩn đấy";
        } else {
            echo "không chuẩn";
        }
    }
}
$checkBracket = new Bracket();

$string1 = "s * (s – a) * (s – b) * (s – c)";
echo $string1."<br>";
echo $checkBracket->isTrue($string1)."<br>";


$string2 =  "(– b + (b2 – 4*a*c)^0.5) / 2*a";
echo $string2."<br>";
echo $checkBracket->isTrue($string2)."<br>";


$string3 = "s * (s – a) * (s – b * (s – c)";
echo $string3."<br>";
echo $checkBracket->isTrue($string3)."<br>";

$string4 = "s * (s – a) * s – b) * (s – c)";
echo $string4."<br>";
echo $checkBracket->isTrue($string4)."<br>";

$string5 = "(– b + (b^2 – 4*a*c)^(0.5/ 2*a))";
echo $string5."<br>";
echo $checkBracket->isTrue($string5)."<br>";
// function hasMatchedParenthesis($string) {
//     $len = strlen($string);
//     $stack = array();
//     for ($i = 0; $i < $len; $i++) {
//         switch ($string[$i]) {
//             case '(': array_push($stack, 0); break;
//             case ')': 
//                 if (array_pop($stack) !== 0)
//                     return false;
//             break;
//             case '[': array_push($stack, 1); break;
//             case ']': 
//                 if (array_pop($stack) !== 1)
//                     return false;
//             break;
//             default: break;
//         }
//     }
//     return (empty($stack));
// }
// echo hasMatchedParenthesis('s * (s – a) * (s – b) * (s – c   ) ');