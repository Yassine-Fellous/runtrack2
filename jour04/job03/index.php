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
    <form action="#" method="POST">
        NOM:   <input type="text" name="NOM" required><br>
        PRENOM:<input type="text" name="PRENOM" required><br>
        EMAIL: <input type="text"name="EMAIL" required><br>
        <input type="submit" value="Send!"></br>
    </form>

    <?php

    foreach ($_POST as $oui) {
        $i++;
    }
    if (isset($_POST['NOM'])){
    echo "Il y a  actuellement ",$i, " valeurs actuellement envoyer par la méthode POST";
    }

    ?>
</body>
</html>