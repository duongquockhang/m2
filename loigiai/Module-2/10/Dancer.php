<?php 
    /*
    Bước 1: Tạo một lớp tên là Dancer với 2 thuộc tính:
    $name: Tên của dancer
    $gender: Giới tính của dancer
    */

    class Dancer {
        public $name;
        public $gender;
        public function __construct($name,$gender){
            $this->name     = $name;
            $this->gender   = $gender;
        }
    }

    /* Bước 2: Tạo 2 hàng đợi (sử dụng SPL) */
    //hàng đợi 1
    $objSplQueue_nam = new SplQueue();
    //hàng đợi 2
    $objSplQueue_nu = new SplQueue();

    /* Bước 3: Tạo một số dancer nam và dancer nữ. Lần lượt thêm các dancer nam và nữ vào trong hàng đợi tương ứng */    
    //thêm các bạn nam vào hàng đợi
    $objSplQueue_nam->enqueue( new Dancer('Hùng','male') );
    $objSplQueue_nam->enqueue( new Dancer('Đạt','male') );
    $objSplQueue_nam->enqueue( new Dancer('Hoàn','male') );
    $objSplQueue_nam->enqueue( new Dancer('Châu','male') );

    //thêm các bạn nữ vào hàng đợi
    $objSplQueue_nu->enqueue( new Dancer('Thảo','female') );
    $objSplQueue_nu->enqueue( new Dancer('Ngọc Anh','female') );

    //
    $i = 0;
    $pairs              = [];
    $nam_waiting        = [];
    $nu_waiting         = [];
    while (!$objSplQueue_nu->isEmpty() || !$objSplQueue_nam->isEmpty()) {
        
        if( !$objSplQueue_nu->isEmpty() && !$objSplQueue_nam->isEmpty() ){
            $pairs[] = $objSplQueue_nam->dequeue()->name .' - '.$objSplQueue_nu->dequeue()->name;
        }elseif( $objSplQueue_nu->isEmpty() && !$objSplQueue_nam->isEmpty() ){
            $nam_waiting[] = $objSplQueue_nam->dequeue()->name;
        }elseif( !$objSplQueue_nu->isEmpty() && $objSplQueue_nam->isEmpty() ){
            $nu_waiting[] = $objSplQueue_nu->dequeue()->name;
        }
    }

    echo '<pre>';
        print_r( $pairs );
        print_r( $nam_waiting );
        print_r( $nu_waiting );
    echo '</pre>';