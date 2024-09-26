<?php
$n = range('a', 'z');
$y = array_rand($n);
$x = $n[$y];
$m = array ( 'u','e', 'o', 'a', 'i');needle: 

if (in_array($x ,$m) ){
    echo"$x là chữ nguyên âm";
}else{
    echo" $x là chữ phụ âm";
}



