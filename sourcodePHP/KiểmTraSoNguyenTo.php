<?php
$n =rand(2,20);
echo"số cần kiểm tra là n: $n<br>";
$x = true;
for ($i = 2; $i <= sqrt($n); $i++) {
if ($n%$i == 0) {
 $x= false;
 break;
}
}
if ($x) {
    echo "số $n là số nguyên tố";
}else{
    echo "số $n không phải là số nguyên tố";
}