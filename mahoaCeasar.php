<?php
$n = str_split('boyfriend');#nhập đoạn mã cần mã hóa tại đây
$m = 8;#đây là khóa 

$KetQua = array();
for ($i = 0; $i < count($n); $i++) {

    $Kytu = $n[$i];
    $ChuCai = range('a', 'z');
    $ViTri = array_search($Kytu, $ChuCai);
    $new_ViTri = ($ViTri + $m) % 26;
    $KetQua[] = $ChuCai[$new_ViTri];
}


echo implode('', $n)." :Đây là mã ban đầu";
echo"<br>";
echo"Khóa của đoạn mã là:$m <br>";
echo implode('', $KetQua). ": Đây là mã đã chuyển hóa  ";
echo"<br>";

