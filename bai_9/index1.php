<?php
class DivideByZeroExeption extends Exception{
    public function __toString(){
        return "Can't divide by zero";
    }
}
function divide($numerator, $denominator){
    if($denominator == 0){
        throw new DivideByZeroExeption();
    }
        return "Kết quả phép chia a cho b: ".$numerator/$denominator;

}
try {
    $result = divide(100,0);
    echo $result;
} catch (DivideByZeroExeption $e){
    echo $e;
}