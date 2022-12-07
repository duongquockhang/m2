<?php
class Stack{
private array $stack = [];
private int $limit;

public function __construct(int $limit = 100){  
    $this->stack = [];
    $this->limit = $limit; 
}
    public function push($element){
        array_unshift($this->stack, $element);
        }
    public function pop(){
            return array_shift($this->stack);
        }
    public function top(){
        return $this->stack[0];
    }
    public function isEmpty(){
        if(count($this->stack) == 0){
            echo 'rỗng';
        }else{
            echo 'không rỗng';
        }
    }
}
$objstack = new Stack();
$objstack->push('Sách');
$objstack->push('Vở');
$objstack->push('Bút');
$objstack->push('Thước');
$objstack->push('Tẩy');
echo $objstack->pop().'<br>';
echo $objstack->pop().'<br>';
echo $objstack->pop().'<br>';

$objstack->push('Bút chì');
$objstack->push('Sách toán');

echo $objstack->isEmpty();

echo $objstack->pop().'<br>';
echo $objstack->pop().'<br>';
echo $objstack->pop().'<br>';
echo $objstack->pop().'<br>';

echo $objstack->isEmpty();

// echo '<pre>';
//     print_r( $objstack );
// echo '</pre>';
?>