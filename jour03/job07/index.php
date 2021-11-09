<?php

$str = "Certaines choses changent, et d'autres ne changeront jamais";
$j =-1; 

for ( $i=0; isset($str[$i]);$i++);
$i--;

while ($j < $i) {
    echo $str[$j];
    $j++;
}

?>