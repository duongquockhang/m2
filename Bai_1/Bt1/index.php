<?php
function numberTowords($num)
{

$ones = array(
0 =>"Không",
1 => "Một",
2 => "Hai",
3 => "Ba",
4 => "Bốn",
5 => "Năm",
6 => "Sáu",
7 => "Bảy",
8 => "Tám",
9 => "chín",
10 => "Mười",
11 => "Mười một",
12 => "Mười hai",
13 => "Mười ba",
14 => "Mười bốn",
15 => "Mười lăm",
16 => "Mười sáu",
17 => "Mười bảy",
18 => "Mười tám",
19 => "Mười chín",
"014" => "Mười bốn"
);
$tens = array( 
0 => "không",
1 => "mười",
2 => "hai mươi",
3 => "ba mươi", 
4 => "bốn mươi", 
5 => "năm mươi", 
6 => "sáu mươi", 
7 => "bảy mươi", 
8 => "tám mươi", 
9 => "chín mươi" 
); 
$hundreds = array( 
"trăm", 
"nghìn", 
"triệu", 
"tỷ", 
"nghìn tỉ", 

); /*limit t quadrillion */
$num = number_format($num,2,".",","); 
$num_arr = explode(".",$num); 
$wholenum = $num_arr[0]; 
$decnum = $num_arr[1]; 
$whole_arr = array_reverse(explode(",",$wholenum)); 
krsort($whole_arr,1); 
$rettxt = ""; 
foreach($whole_arr as $key => $i){
	
while(substr($i,0,1)=="0")
		$i=substr($i,1,5);
if($i < 20){ 
/* echo "getting:".$i; */
$rettxt .= $ones[$i]; 
}elseif($i < 100){ 
if(substr($i,0,1)!="0")  $rettxt .= $tens[substr($i,0,1)]; 
if(substr($i,1,1)!="0") $rettxt .= " ".$ones[substr($i,1,1)]; 
}else{ 
if(substr($i,0,1)!="0") $rettxt .= $ones[substr($i,0,1)]." ".$hundreds[0]; 
if(substr($i,1,1)!="0")$rettxt .= " ".$tens[substr($i,1,1)]; 
if(substr($i,2,1)!="0")$rettxt .= " ".$ones[substr($i,2,1)]; 
} 
if($key > 0){ 
$rettxt .= " ".$hundreds[$key]." "; 
}
} 
if($decnum > 0){
$rettxt .= " and ";
if($decnum < 20){
$rettxt .= $ones[$decnum];
}elseif($decnum < 100){
$rettxt .= $tens[substr($decnum,0,1)];
$rettxt .= " ".$ones[substr($decnum,1,1)];
}
}
return $rettxt;
}
extract($_POST);
if(isset($convert))
{
echo "<p align='center' style='color:blue'>".numberTowords("$num")."</p>";
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Đổi chữ thành số</title>
	</head>
	<body>
		<form method="post">
			<table border="0" align="center">
				<tr>
				<td>Nhập số</td>
				<Td><input type="text" name="num" value="<?php if(isset($num)){echo $num;}?>"/></Td>
				</tr>
				<tr>



				
				<td colspan="2" align="center">
				<input type="submit" value="Đổi chữ thành số" name="convert"/>
				</td>
				</tr>
			</table>
        </form> 

	</body>
</html>