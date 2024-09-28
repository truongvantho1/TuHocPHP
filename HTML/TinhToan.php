<?php
$a = $_POST["canhthunhat"];
$b = $_POST["canhthuhai"];
$c= $_POST["canhthuba"];
if((($a + $b)>$c) || (($b + $c)>$a) || (($c + $b)>$b)) 
{
    echo "Day la tam giac<br>";
    $s= $a + $b + $c;
    echo"ba canh tam giac lan lượt là:<br> $a<br>";
    echo"$b<br>";
    echo"$c<br>";
    echo"chu vi tam giac  la:$s<br> ";
    $dienTich = sqrt(($s / 2) * (($s / 2) - $a) * (($s / 2) - $b) * (($s / 2) - $c));
    echo"dien tich tam giac là $dienTich";
}else{
    echo"Day khong phai la tam giac";
}
