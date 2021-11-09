<?php

function calcule(int $a,string $opération, int $b){
    if($opération == "+"){
        return $a + $b;
    }
    if($opération == '-'){
        return $a - $b;
    }
    if($opération == '*'){
        return $a * $b;
    }
    if($opération == '/'){
        return $a / $b;
    }
    if($opération == '%'){
        return $a % $b;
    }
}
echo calcule(2,'+',2).'<br>';
echo calcule(2,'-',2).'<br>';
echo calcule(2,'*',2).'<br>';
echo calcule(2,'/',2).'<br>';
echo calcule(2,'%',2).'<br>';


?>