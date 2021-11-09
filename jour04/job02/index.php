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
    ?>
    <table border="1">
        <tr>
            <th>Arguments</th>
            <th>valeurs</th>
        </tr>


        <tr>    
            <td>NOM</td>
            <td><?php echo $_GET['NOM'];?></td>
        </tr>
        
        <tr>
            <td>PRENOM</td>
            <td><?php echo $_GET['PRENOM'];?></td>
        </tr>
        
        <tr>
            <td>EMAIL</td>
            <td><?php echo $_GET['EMAIL'];?></td>
        </tr>
    
    </table>


</html>