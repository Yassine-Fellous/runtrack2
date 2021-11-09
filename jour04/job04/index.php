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
        NOM:   <input type="text" name="NOM" ><br>
        PRENOM:<input type="text" name="PRENOM" ><br>
        EMAIL: <input type="text"name="EMAIL" ><br>
        <input type="submit" value="Send!"></br>
    </form>
<?php
    foreach ($_POST as $oui ) {
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
            <td><?php if (isset($_POST['NOM'])){
                echo $_POST['NOM'];
            };?></td>
        </tr>
        
        <tr>
            <td>PRENOM</td>
            <td><?php if (isset($_POST['PRENOM'])){
                echo $_POST['PRENOM'];
            };?></td>
        </tr>
        
        <tr>
            <td>EMAIL</td>
            <td><?php if (isset($_POST['EMAIL'])){
                echo $_POST['EMAIL'];
            };?></td>
        </tr>
    
    </table>


</html>