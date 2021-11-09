<?php

function occurrences($char,$str){
    $j=0;
for($i=0; isset($char,$str[$i])==TRUE ;$i++){
if ($str[$i] == $char){
$j++;
}
}
return $j;
}

echo occurrences("r","str");


?>