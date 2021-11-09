<?php

$str = "I'm sorry Dave I'm afraid I can't do that";
$j= 0 ;


while (isset($str[$j])) {
    if ($str[$j] == 'a' || $str[$j] == 'e' || $str[$j] == 'i' || $str[$j] == 'o' || $str[$j] == 'u' || $str[$j] == 'y' || 
    $str[$j] == 'A' || $str[$j] == 'E' || $str[$j] == 'I' || $str[$j] == 'O' || $str[$j] == 'U' || $str[$j] == 'Y'){
        echo $i[$j];
    }
    $j++;

}

?>