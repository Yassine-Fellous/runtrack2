<?php
$i =  [200, 204, 173, 98, 171, 404, 459];

foreach

($i as $key => $valeur) {
    
    if ($i%2== 0)
    echo "$valeur".'est paire'.'<br>';
    
    else {
        echo "$valeur".'est impaire'.'<br>';
    }
}

?>