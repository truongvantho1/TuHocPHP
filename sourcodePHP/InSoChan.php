<?php
$n = rand(1, 100 );
$i=1;
echo"Cac so chan trong khoang $n la<br>";
    for ($i= 0; $i<$n; $i++) {
        if ($i %2== 0) {
        echo "$i<br>";
    }
}
