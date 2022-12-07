<?php
$so_mot = '';
$so_hai = '';
$pheptinh = '';
$ketqua = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo '<pre>';
        print_r( $_POST );
    echo '</pre>';

    $so_mot   = $_POST[ 'so_mot' ];
    $so_hai   = $_POST[ 'so_hai' ];
    $pheptinh = $_POST[ 'pheptinh' ];

    switch ($pheptinh) {
        case '+':
           $ketqua = $so_mot + $so_hai;
            break;
        case '-':
            $ketqua = $so_mot - $so_hai;
            break;
        case '*':
            $ketqua = $so_mot * $so_hai;
            break;
        case '/':
            try {
                if ($so_hai == 0) {
                    throw new Exception("by zero");
                }   
                $ketqua = $so_mot / $so_hai;
                break;
            }  catch (Exception $e){
                echo "</br>Bắt ngoại lệ: ". $e->getMessage();
            }
        //     if($so_hai !=0){
        //         $ketqua = $so_mot / $so_hai;
        //     }
        //    else{
        //     echo 'lỗi';
        //    }
            break;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        .error {
            color: #FF0000;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: solid 1px #ccc;
        }

        form {
            width: 450px;
        }
    </style>
</head>

<body>
    <h2>Simple Calculator</h2>
    <form method="post">
        <fieldset>
            <legend>Calculator</legend>
            First operand: <input type="number" name="so_mot" value="<?php echo $so_mot ;?>">

            <br><br>
            Operator: <select name="pheptinh">
                            <option value="+">+</option>
                            <option value="-">-</option>
                            <option value="*">*</option>
                            <option value="/">/</option>
                      </select>
            <br><br>
            Second operand: <input type="number" name="so_hai" value="<?php echo $so_hai ;?>">

            <br><br>
            <input type="submit" name="submit" value="Calculator" style="background-color: green">

        </fieldset>
    </form>
    <h2>Result: <p>
        <?php
        if ( $ketqua != '' ){
        echo $so_mot . ' ' .$pheptinh . ' ' .$so_hai . ' = ' .$ketqua;
        }    
        else{
            echo "</br>Bắt ngoại lệ: ". $e->getMessage();
        }
        
        ?>
    </p></h2>

</body>

</html>