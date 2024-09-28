<?php
$tendangnhap =  $_POST['tendangnhap'];
$matkhau =  $_POST['matkhau'];
if( $tendangnhap  == "admin" || $matkhau == "1") {
    echo"dangnhapthanhcong";
}else{
    echo "dangnhapthatbai";
}


?>