<?php

$i = 1;
while ($i <= 100) {

        if($i%3 == 0 && $i%5 == 0 ){
            echo 'Fizzbuzz'.'<br>';
        }
        elseif($i%5 == 0){
            echo 'buzz'.'<br>';
        }
        elseif($i%3 == 0){
            echo 'fizz'.'<br>';
        }else{
            echo $i.'<br>';
        }
$i++;
}

?>