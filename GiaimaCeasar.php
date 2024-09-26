<?php
$n = str_split('erbiulhqg');#nhập đoạn mã cần giải tại đây
#khóa là j , 26 khóa nên từ 0 đến 25 là 26 khóa (khóa alphabet0 đến  alphabet25 ạ)
for ($j = 0; $j < 26; $j++){
        $KetQua = array(); 
    for ($i = 0; $i < count($n); $i++) {    
        $Kytu = $n[$i];
        $ChuCai = range('a', 'z');
        $ViTri = array_search($Kytu, $ChuCai);
        $new_ViTri = ($ViTri + $j) % 26;
        $KetQua[] = $ChuCai[$new_ViTri];
       
    }
    echo implode('', $n)." :Đây là mã cần giải";
    echo"<br>";
    echo"Khóa của đoạn mã là:$j<br>";
    echo implode('', $KetQua). ": Đây là mã đã giải  ";
    echo"<br>";
    echo"------------------------------------<br>";
}
#em vẫn chưa biết cách nhập biến động vào cho $n ạ :<<<<<