<?php
$n = rand(2,10);
$m = rand(2,10);
echo"in ra ma trận ngẫu nhiên $n x $m <br>";
for ($i= 0; $i<$n; $i++) {  
   
    
    for ($j= 0; $j<$m; $j++) {
       
        echo rand(1, 9) . " "; 
    }
    echo "<br>";
}
        
    