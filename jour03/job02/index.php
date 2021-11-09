<?php

$str =  'Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.';
$j = 0;
while (isset($str[$j])) {
    if ( $j%2 == 0) {
    echo $str[$j];

    }
$j++;
}

?>