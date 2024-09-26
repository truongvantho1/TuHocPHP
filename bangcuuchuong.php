<?php
$n=0;
$i=0;

echo"bang cuu chuong";
for ($i= 1; $i<=10; $i++){
    echo "bang cuu chuong $i<br> ";
    for ($j= 0; $j<= 10; $j++)
{
    $n=$i* $j;
  
    echo"$i * $j = $n    | ";echo"   ";
}
echo "<br>";
}