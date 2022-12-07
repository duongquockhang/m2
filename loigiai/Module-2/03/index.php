<?php
class Student {
    //thuộc tính
    public $name = '';
    public $age  = 0;

    //các phương thức
    function __construct(){

    }

    function retros(){
        echo '<br> retros()';
    }
    function learn(){
        echo '<br> learn()';
    }
    function setAge( $tham_so_age ){
        $this->age = $tham_so_age;
    }
    function getAge(){
        return $this->age;
    }
}

//khởi tạo đối tượng
$objStudent = new Student();

//đặt lại giá trị thuộc tính
$objStudent->age = 20;

//truy xuất thuộc tính $age;
echo $objStudent->age;

//truy xuất phương thức
$objStudent->retros();
$objStudent->setAge(100);
echo $objStudent->getAge();


?>