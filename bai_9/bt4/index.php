<?php

//include_once "app/index.php";

class Stack
{
    public array $stack;
    public int $limit;

    public function __construct(int $limit = 10)
    {
        $this->stack = [];
    }

    public function push($element)
    {
        array_unshift($this->stack, $element);
    }

    public function pop(): array
    {
       $getElement = array_shift($this->stack);
       array_push($this->stack, $getElement);
       return $this->stack;
    }
}
$test = new Stack();
$test->push(1);
$test->push(2);
$test->push(3);
$test->push(4);
$test->push(5);

var_dump($test->pop());
var_dump($test->pop());
var_dump($test->pop());
var_dump($test->pop());
echo "<pre>";
var_dump($test->pop());
echo "</pre>";