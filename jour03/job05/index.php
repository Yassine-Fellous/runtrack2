<?php

$str = "On n est pas le meilleur quand on le croit mais quand on le sait";
$dic = [
    'consonnes' => 'BCDFGHJKMNPQRSTVWXZbbcdfghjklmnpqrstvwxz',
    'voyelles' => 'AEIOUYaeiouy'
];

$k = 0;
$c = 0;
$v = 0;

while (isset($str[$k])) {
    
    for ($l = 0; isset($dic['consonnes'][$l]);$l++) {
        if($str[$k] == $dic["consonnes"][$l]) {
            $c++; 
        } 
        
    }
    for ($m = 0; isset($dic['voyelles'][$m]); $m++) {
        if($str[$k] == $dic['voyelles'][$m]) {
            $v++;
        }
        
        
    }
$k++;
}

echo '<html>
    <table border = 6>
        <tr>
            <td>Voyelles</td>
            <td>Consonnes</td>
        </tr>
        <tr>
            <td>'.$v.'</td>
            <td>'.$c.'</td>
        </tr>
    </table>
</html>';



?>