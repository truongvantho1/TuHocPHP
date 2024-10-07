<?php
$n = [2, 7, 6, 3, 8];
$target = 9;

function sum($n, $target) {
    $result = [];
    $map = []; // Create an associative array to store the complements

    foreach ($n as $num) {
        $complement = $target - $num; // Calculate the needed complement
        if (isset($map[$complement])) {
            // If the complement exists in the map, we found a pair
            $result = [$complement, $num];
            return $result; 
        }
        
        $map[$num] = true; // Store the current number in the map
    }
    return [];
}
$result = sum($n, $target);

for ( $i =0 ; $i < count($result); $i++){
   
   print_r( $result[$i]);
}

