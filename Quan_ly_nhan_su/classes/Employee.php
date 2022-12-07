<?php
// namespace Classes;
class Employee {
    //thuộc tính
    public $ma_nv;
    public $ho_va_ten;
    public $so_dien_thoai;
    public $email;

    private $bang_du_lieu = 'data.json';

    //phương thức
    // public function __construct( $ts_ma_nv, $ts_ho_va_ten, $ts_so_dien_thoai, $ts_email ){
    //     $this->ma_nv            = $ts_ma_nv;
    //     $this->ho_va_ten        = $ts_ho_va_ten;
    //     $this->so_dien_thoai    = $ts_so_dien_thoai;
    //     $this->email            = $ts_email;
    // }

    /*
    C R U D
    */
    
    //phương thức lưu dữ liệu
    public function luu_du_lieu(){

        $ma_nv_tiep_theo = $this->lay_id_tiep_theo();

        //tạo mảng data_employee
        $data_employee = [
            'ma_nv'         => $ma_nv_tiep_theo,
            'ho_va_ten'     => $this->ho_va_ten,
            'so_dien_thoai' => $this->so_dien_thoai,
            'email'         => $this->email
        ];
        $data_array = $this->lay_tat_ca();
        echo '<pre>';
            print_r( $data_array );
        echo '</pre>';
        //đưa vào mảng mới với đối tượng truyền vào
        $data_array[] = $data_employee;

        //chuyển array sang json
        $array_to_json = json_encode( $data_array );
        //lưu vào file
        $luu_ok = file_put_contents( $this->bang_du_lieu , $array_to_json);

        return $luu_ok;
    }

    //phương thức lưu dữ liệu
    public function cap_nhat_du_lieu(){
       
        $id = $this->ma_nv;

        $chi_so     = $this->lay_chi_so_theo_id( $this->ma_nv );
        $data_array = $this->lay_tat_ca();

        //cập nhật lại dữ liệu
        $data_array[$chi_so]->ho_va_ten     = $this->ho_va_ten;
        $data_array[$chi_so]->so_dien_thoai = $this->so_dien_thoai;
        $data_array[$chi_so]->email         = $this->email;

        //chuyển array sang json
        $array_to_json  = json_encode( $data_array );
        //lưu vào file
        $luu_ok         = file_put_contents( $this->bang_du_lieu , $array_to_json);
        return $luu_ok;

    }

    //phương thức lấy tất cả dữ liệu
    public function lay_tat_ca(){
        //lấy dữ liệu cũ, dùng hàm file_get_contents
        $data_json  = file_get_contents( $this->bang_du_lieu );
        //chuyển json sang array
        $data_array = json_decode($data_json);
        return $data_array;
    }

    //phương thức lấy dữ liệu theo ID
    public function lay_du_lieu_theo_id( $id ){
        // echo "<br>".__METHOD__;
        // echo "<br>".$id;

        $data_array = $this->lay_tat_ca();

        foreach( $data_array as $key => $data ){
            if( $data->ma_nv == $id ){
                return $data;
            }
        }
        return false;
    }

    //phương thức lấy chi so của mảng theo ID
    public function lay_chi_so_theo_id( $id ){
        $data_array = $this->lay_tat_ca();
        foreach( $data_array as $key => $nhan_vien ){
            if( $nhan_vien->ma_nv == $id ){
                return $key;
            }
        }
    }

    //phương thức tìm mã nhân viên tiếp theo 

    public function lay_id_tiep_theo(){
       
        $du_lieu = $this->lay_tat_ca();
        if( !$du_lieu ){
            return 1;
        }else{
            //dùng hàm end để lấy ra phần tử cuối cùng của mảng
            $du_lieu_moi_nhat = end(  $du_lieu );
            $ma_nv = $du_lieu_moi_nhat->ma_nv;//3
            return $ma_nv + 1;
        }
    }

    public function xoa_du_lieu_theo_id( $id ){

        $chi_so     = $this->lay_chi_so_theo_id( $id );
        $data_array = $this->lay_tat_ca();

        //xóa phần tử theo chỉ số
        unset( $data_array[$chi_so] );

        $data_array = array_values($data_array);
        //chuyển array sang json
        $array_to_json = json_encode( $data_array );

        //lưu vào file
        $luu_ok = file_put_contents( $this->bang_du_lieu , $array_to_json);
        return $luu_ok;
    }
}
class EmployeeManager {
 
    //phương thức hiển thị danh sách
    function danh_sach(){
        //khoi tao đối tượng
        $objEmployee = new Employee();
        $data_array  = $objEmployee->lay_tat_ca();

        if( !$data_array ){
            $data_array = [];
        }
        return $data_array;
    }

    //phương thức thêm mới (C - create)
    function them( $request ){ //add.php -> $objEmployeeManager->them( $_REQUEST );

        //khoi tao đối tượng
        $objEmployee = new Employee();

        //thay đổi giá trị thuộc tính
        $objEmployee->ho_va_ten         = $request['ho_va_ten'];
        $objEmployee->so_dien_thoai     = $request['so_dien_thoai'];
        $objEmployee->email             = $request['email'];

        //gọi phương thức luu_du_lieu
        $objEmployee->luu_du_lieu();
        /*
        Classes\Employee Object
        (
            [ma_nv:Classes\Employee:private] => 
            [ho_va_ten] => Nguyễn Văn D
            [so_dien_thoai] => 123456789
            [email] => clement@pixodeo.com
        )
        */
        //chuyển hướng
        header( "Location: index.php" );
    }

    //phương thức xem thông tin (R - read)
    function xem(){

    }

    //phương thức cập nhật ( U - update )
    function sua( $id , $request ){
    
        //khoi tao đối tượng
        $objEmployee = new Employee();

        //thay đổi giá trị thuộc tính
        $objEmployee->ma_nv             = $id;
        $objEmployee->ho_va_ten         = $request['ho_va_ten'];
        $objEmployee->so_dien_thoai     = $request['so_dien_thoai'];
        $objEmployee->email             = $request['email'];
        $objEmployee->cap_nhat_du_lieu();

        //chuyển hướng
        header( "Location: index.php" );
    }

    //phương thức xóa ( D - delete )
    function xoa( $id ){
        //khoi tao đối tượng
        $objEmployee = new Employee();
        $objEmployee->xoa_du_lieu_theo_id( $id );

         //chuyển hướng
         header( "Location: index.php" );
        
    }
}