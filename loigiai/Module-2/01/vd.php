
    <?php 
    // $ho_va_ten = 'Hồ Quốc Hoàn';
    // $a = 5;
    // $b = 7;
    // $kq = $a + $b;
    // echo $kq;
    $ho = 'Hồ Quốc';
    $ten = 'Hoàn';
    echo $ho . ' ' . $ten;
    //dấu nháy đơn
    echo 'Tôi tên là: ' . $ho . ' ' . $ten . '<br>';
    //dấu nháy đôi
    echo "My name is: $ho $ten <br>";
    //tạo ra biến toàn cục
    global $phep_tinh;
    $phep_tinh = 'Cộng';

    function tinh_tong( $so_a, $so_b ){
        //muốn dùng biến toàn cục, phải gọi là global
        global  $phep_tinh;
        $phep_tinh = 'Trừ';
        $ket_qua = $so_a + $so_b;
        
    }
    tinh_tong( 5,7 );
    // echo $phep_tinh;
    for($i = 1; $i < 100; $i++){
        echo "$i" ;
    }

    //foreaach
    $sachs = ['Văn','Sử','Địa'];
    foreach ($sachs as $chi_so => $gia_tri) {
        echo "$chi_so - $gia_tri <br>";
    }
    //for
    for ( $i = 0; $i < count($sachs); $i++ ) {
        echo "$i - $sachs[$i] <br>";
    }
    ?>