<?php 
$i = 0;
while ($i <= 100) {
    switch($i){
    case (0):
        echo $i . "<br>";
    break;
    case ($i <= 20):
        echo "<i>".$i."</i>" . "<br>";
    break;
    case (42):
        echo "La Plateforme_" . "<br>";
    break;
    case ($i >= 25 && $i <= 50 ):
        echo "<u>".$i."</u>" . "<br>";
    break;
    default : 
    echo $i . "<br>";
    }
    
$i++;

}

?>
