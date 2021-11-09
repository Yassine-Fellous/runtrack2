<?php

function leetspeak($str){
    for($i=0;isset($str[$i]);$i++){
        switch($str[$i]){
            case "A":
            $str[$i]= 4;
            break;
            case "a":
                $str[$i]= 4;
            break;
            case "B":
                $str[$i]= 8;
            break;
            case "b":
                $str[$i]= 8;
            break;
            case "E":
                $str[$i]= 3;
            break;
            case "e":
                $str[$i]= 3;
            break;
            case "G":
                $str[$i]= 6;
            break;
            case "g":
                $str[$i]= 6;
            break;
            case "L":
                $str[$i]= 1;
            break;
            case "l":
                $str[$i]= 1;
            break;
            case "S":
                $str[$i]= 5;
            break;
            case "s":
                $str[$i]= 5;
            break;
            case "T":
                $str[$i]= 7;
            break;
            case "t":
                $str[$i]= 7;
            break;
        }
    }
return $str;
}
echo leetspeak('AaBbEeGgLlSsTtblbmhuihmhpiuugiph');



?>