<?php
$n = rand(2,10);
$m = rand(2,10);
echo "Ma trận lẻ ngẫu nhiên $n x $m la: <br>";
$x = range(1 , 9 , 2);
for ($i= 0; $i<$n; $i++) {  
   
    
    for ($j= 0; $j<$m; $j++) {
       
        echo $x[array_rand($x)] . " "; 
    }
    echo "<br>";
}