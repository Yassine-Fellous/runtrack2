<?php
$i = 0;
while ($i <= 1000) {
    $j= 1;
    $k = 0;
    while ($j <= $i ) {
        
        if($i%$j == 0) {
        
        $k++;
        }
    $j++;
    }
    elseif ($k == 2 ){
        echo $i.'<br>';
    }
$i++;
}
?>