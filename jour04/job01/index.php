<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>
    <?php
    $i=0;
    ?>
    <form action="#" method="GET">
        NOM:   <input type="text" name="NOM" required><br>
        PRENOM:<input type="text" name="PRENOM" required><br>
        EMAIL: <input type="text"name="EMAIL" required><br>
        <input type="submit" value="Send!"></br>
    </form>

    <?php

    foreach ($_GET as $oui) {
        $i++;
    }
    if (isset($_GET['NOM'])){
    echo "Il y a  actuellement ",$i, " valeurs actuellement envoyer par la méthode GET";
    }

    ?>
</body>
</html>

