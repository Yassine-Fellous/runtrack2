<?php

$bool = true.false;
$int = 1;
$float = 1.4;
$string = 'oui';

echo '
<html>
    <head>
        <title>Tableeau</title>
    </head>
    <body>
        <header>
            <table border ="1">
                <tr>
                    <th></th>
                    <th>type</th>
                    <th>nom</th>
                    <th>valeur</th>
                </tr>
            
        </header>
                <tr>
                    <td>$bool</td>
                    <td>booléens</td>
                    <td>bool</td>
                    <td>'.$bool.'</td>
                </tr>
                <tr>
                    <td>$int</td>
                    <td>nombres entiers</td>
                    <td>int</td>
                    <td>'.$int.'</td>
                </tr>
                <tr>
                    <td>$float</td>
                    <td>nombres décimaux</td>
                    <td>float</td>
                    <td>'.$float.'</td>
                </tr>
                <tr>
                    <td>$string</td>
                    <td>Les chaînes de caractères</td>
                    <td>string</td>
                    <td>'.$string.'</td>
                </tr>
    </body>
</html>';


?>

