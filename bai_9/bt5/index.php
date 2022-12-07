<?php

class Stack
{
    public $stack;
    public $limit;

    function __construct($limit)
    {
        $this->stack = [];
        $this->limit = $limit;
    }

    function push($item)
    {
        if (count($this->stack) < $this->limit) {
            array_unshift($this->stack, $item);
        } else {
            return "Stack is overload";
        }
    }

    function pop()
    {
        if (count($this->stack) > 0) {
         return   array_shift($this->stack);
        } else {
            return "Stack is empty";
        }
    }
}
function convertDecimalToBinary($number){
    $stack = new Stack(100);
    while ($number/2>0){
        $mod = $number%2;
        $stack->push($mod);
        $number = floor($number/2);
    }
    $str = '';
    $count =count($stack->stack);
    for ($i=0; $i<$count; $i++){
        $str = $str.$stack->pop();
    }
    echo $str;
}
 convertDecimalToBinary(30);